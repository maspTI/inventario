<template>
    <form
        class="container-fluid"
        @keydown="form.errors.clear($event.target.name)"
        @submit.prevent="send"
    >
        <div class="row d-flex align-items-end">
            <div class="col-md-6">
                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Nome</label>
                    <input
                        type="text"
                        class="form-control"
                        v-model="form.name"
                        autofocus
                    />
                    <small
                        class="text-danger"
                        v-text="form.errors.get('name')"
                        v-if="form.errors.has('name')"
                    ></small>
                </div>
            </div>
            <div class="col-md-6 form-group">
                <label for="category">Fornecedor</label>
                <div class="input-group">
                    <multiselect
                        class="form-control"
                        :options="sellers"
                        :searchable="true"
                        :allow-empty="false"
                        placeholder="Selecione uma opção"
                        selectLabel="Pressione Enter para selecionar"
                        deselectLabel="Pressione Enter para remover"
                        selectedLabel="Selecionado"
                        track-by="name"
                        label="name"
                        v-model="form.seller"
                    />
                    <div class="input-group-append">
                        <button
                            class="btn btn-success"
                            type="button"
                            data-toggle="modal"
                            data-target="#createSellerModal"
                        >
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                <small
                    class="text-danger"
                    v-text="form.errors.get('seller')"
                    v-if="form.errors.has('seller')"
                ></small>
            </div>
            <div class="col-md-6">
                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Valor</label>
                    <money
                        class="form-control"
                        v-model="form.value"
                        v-bind="money"
                    ></money>
                    <small
                        class="text-danger"
                        v-text="form.errors.get('value')"
                        v-if="form.errors.has('value')"
                    ></small>
                </div>
            </div>
            <div class="col-md-3 form-group">
                <label for="renewal_term">Prazo de Renovação</label>
                <multiselect
                    class="form-control"
                    :options="renewal_terms"
                    :searchable="true"
                    :allow-empty="false"
                    placeholder="Selecione uma opção"
                    selectLabel="Pressione Enter para selecionar"
                    deselectLabel="Pressione Enter para remover"
                    selectedLabel="Selecionado"
                    track-by="name"
                    label="name"
                    v-model="form.renewal_term"
                />
                <small
                    class="text-danger"
                    v-text="form.errors.get('renewal_term')"
                    v-if="form.errors.has('renewal_term')"
                ></small>
            </div>
            <div class="col-md-3 form-group d-flex flex-column">
                <label>Data da Compra</label>
                <date-picker
                    width="100%"
                    format="DD/MM/YYYY"
                    v-model="form.bought_at"
                ></date-picker>
                <small
                    class="text-danger"
                    v-text="form.errors.get('bought_at')"
                    v-if="form.errors.has('bought_at')"
                ></small>
            </div>
            <div class="offset-md-2 col-md-8">
                <label>Descrição</label>
                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating"
                        >Breve descrição sobre a licença</label
                    >
                    <textarea
                        class="form-control"
                        rows="5"
                        v-model="form.description"
                    ></textarea>
                    <small
                        class="text-danger"
                        v-text="form.errors.get('description')"
                        v-if="form.errors.has('description')"
                    ></small>
                </div>
            </div>
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Notas</h4>
                    </div>
                    <note-component
                        v-for="spec in form.notes"
                        :key="spec.id"
                        :spec="spec"
                    />
                    <div class="col-md-12 d-flex justify-content-start">
                        <button class="btn btn-success" @click.prevent="add">
                            Adicionar Nota
                        </button>
                    </div>
                </div>
            </div>
            <submit-button></submit-button>
        </div>
    </form>
</template>
<script>
import Form from "../../form-validation/Form";
import Multiselect from "vue-multiselect";
import "vue-multiselect/dist/vue-multiselect.min.css";
import DatePicker from "vue2-datepicker";
import "vue2-datepicker/locale/pt-br";
import { Money } from "v-money";
import NoteComponent from "../Utilities/Notes";
export default {
    props: ["sellers_db", "licence", "message", "http_verb", "url"],
    data() {
        return {
            form: new Form({
                name: "",
                notes: [],
                value: "",
                seller: "",
                bought_at: new Date(),
                description: "",
                renewal_term: "",
            }),
            sellers: [],
            renewal_terms: [
                { name: "Vitalício", value: "" },
                { name: "Diário", value: "daily" },
                { name: "Semanal", value: "weekly" },
                { name: "Quinzenal", value: "biweekly" },
                { name: "Mensal", value: "monthly" },
                { name: "Bimestral", value: "bimonthly" },
                { name: "Trimestral", value: "quarterly" },
                { name: "Semestral", value: "semiannual" },
                { name: "Anual", value: "yearly" },
                { name: "Bienal", value: "biennial" },
            ],
            money: {
                decimal: ",",
                thousands: ".",
                prefix: "R$ ",
                precision: 2,
                masked: false,
            },
        };
    },
    components: {
        Money,
        DatePicker,
        Multiselect,
        NoteComponent,
    },
    methods: {
        send() {
            window.events.$emit("loading", true);
            let notes = this.form.notes.filter((note) => {
                return (
                    note.specification.length == 0 ||
                    note.description.length == 0
                );
            });

            if (notes.length) {
                swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Complete ou remova as notas com campos vazios.",
                });
                window.events.$emit("loading", false);
                return;
            }

            this.form[this.http_verb](this.url)
                .then((result) => {
                    window.events.$emit("loading", false);
                    window.flash(this.message);
                    window.location = "/licences";
                })
                .catch((errors) => {
                    window.events.$emit("loading", false);
                    window.flash("Algo deu errado.", "danger");
                });
        },
        add() {
            this.form.notes.push({
                id:
                    Math.random()
                        .toString(36)
                        .substring(2, 15) +
                    Math.random()
                        .toString(36)
                        .substring(2, 12),
                specification: "",
                description: "",
            });
        },
    },
    created() {
        if (this.licence) {
            this.form = new Form({ ...this.licence });
        }

        this.sellers = this.sellers_db;

        window.events.$on("new_seller", (seller) => {
            this.sellers.push(seller);
            this.form.seller = seller;
        });

        window.events.$on("add_spec", (formSpec) => {
            this.form.notes.forEach((spec) => {
                if (spec.id == formSpec.id) {
                    spec.description = formSpec.description;
                    spec.specification = formSpec.specification;
                }
            });
        });

        window.events.$on("remove_spec", (removedSpec) => {
            this.form.notes.forEach((spec, index) => {
                if (spec.id == removedSpec.id) {
                    this.form.notes.splice(index, 1);
                }
            });
        });
    },
};
</script>
