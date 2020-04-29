<template>
    <form
        class="container-fluid"
        @keydown="form.errors.clear($event.target.name)"
        @submit.prevent="send"
    >
        <div class="row d-flex align-items-end">
            <div class="col-md-6 form-group">
                <label for="category">Categoria</label>
                <div class="input-group">
                    <multiselect
                        class="form-control"
                        :options="categories"
                        :searchable="true"
                        :allow-empty="false"
                        placeholder="Selecione uma opção"
                        selectLabel="Pressione Enter para selecionar"
                        deselectLabel="Pressione Enter para remover"
                        selectedLabel="Selecionado"
                        track-by="name"
                        label="name"
                        v-model="form.category"
                    />
                    <div class="input-group-append">
                        <button
                            class="btn btn-success"
                            type="button"
                            data-toggle="modal"
                            data-target="#createCategoryModal"
                        >
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                <small
                    class="text-danger"
                    v-text="form.errors.get('category')"
                    v-if="form.errors.has('category')"
                ></small>
            </div>
            <div class="col-md-6 form-group">
                <label for="category">Marca</label>
                <div class="input-group">
                    <multiselect
                        class="form-control"
                        :options="brands"
                        :searchable="true"
                        :allow-empty="false"
                        placeholder="Selecione uma opção"
                        selectLabel="Pressione Enter para selecionar"
                        deselectLabel="Pressione Enter para remover"
                        selectedLabel="Selecionado"
                        track-by="name"
                        label="name"
                        v-model="form.brand"
                        @select="selectedBrand"
                    />
                    <div class="input-group-append">
                        <button
                            class="btn btn-success"
                            type="button"
                            data-toggle="modal"
                            data-target="#createBrandModal"
                        >
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                <small
                    class="text-danger"
                    v-text="form.errors.get('brand')"
                    v-if="form.errors.has('brand')"
                ></small>
            </div>
            <div class="col-md-6 form-group">
                <label for="category">Modelo</label>
                <div class="input-group">
                    <multiselect
                        class="form-control"
                        :options="patterns"
                        :searchable="true"
                        :allow-empty="false"
                        placeholder="Selecione uma opção"
                        selectLabel="Pressione Enter para selecionar"
                        deselectLabel="Pressione Enter para remover"
                        selectedLabel="Selecionado"
                        track-by="name"
                        label="name"
                        v-model="form.pattern"
                    />
                    <div class="input-group-append">
                        <button
                            class="btn btn-success"
                            type="button"
                            data-toggle="modal"
                            data-target="#createPatternModal"
                        >
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                <small
                    class="text-danger"
                    v-text="form.errors.get('pattern')"
                    v-if="form.errors.has('pattern')"
                ></small>
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
            <div class="col-md-6 form-group">
                <label for="category">Funcionário</label>
                <multiselect
                    class="form-control"
                    :options="users"
                    :searchable="true"
                    :allow-empty="true"
                    placeholder="Selecione uma opção"
                    selectLabel="Pressione Enter para selecionar"
                    deselectLabel="Pressione Enter para remover"
                    selectedLabel="Selecionado"
                    track-by="name"
                    label="name"
                    v-model="form.holder"
                />
                <small
                    class="text-danger"
                    v-text="form.errors.get('holder')"
                    v-if="form.errors.has('holder')"
                ></small>
            </div>
            <div class="col-md-6 form-group d-flex flex-column">
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
            <div class="col-md-6">
                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Nota Fiscal</label>
                    <input
                        type="text"
                        class="form-control"
                        v-model="form.ticket_number"
                    />
                    <small
                        class="text-danger"
                        v-text="form.errors.get('ticket_number')"
                        v-if="form.errors.has('ticket_number')"
                    ></small>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Patrimonio</label>
                    <input
                        type="text"
                        class="form-control"
                        v-model="form.property_tag"
                    />
                    <small
                        class="text-danger"
                        v-text="form.errors.get('property_tag')"
                        v-if="form.errors.has('property_tag')"
                    ></small>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Número de Série</label>
                    <input
                        type="text"
                        class="form-control"
                        v-model="form.serial_number"
                    />
                    <small
                        class="text-danger"
                        v-text="form.errors.get('serial_number')"
                        v-if="form.errors.has('serial_number')"
                    ></small>
                </div>
            </div>
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Especificações</h4>
                    </div>
                    <spec-component
                        v-for="spec in form.specifications"
                        :key="spec.id"
                        :spec="spec"
                    />
                    <div class="col-md-12 d-flex justify-content-start">
                        <button class="btn btn-success" @click.prevent="add">
                            Adicionar Especificação
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
import SpecComponent from "./Specs";
export default {
    props: [
        "categories_db",
        "brands_db",
        "patterns_db",
        "users_db",
        "sellers_db",
        "device",
        "message",
        "http_verb",
        "url",
    ],
    data() {
        return {
            form: new Form({
                brand: "",
                seller: "",
                holder: "",
                pattern: "",
                category: "",
                ticket_number: "",
                bought_at: "",
                property_tag: "",
                serial_number: "",
                specifications: [],
            }),
            categories: [],
            brands: [],
            users: [],
            patterns: [],
            sellers: [],
        };
    },
    components: {
        Multiselect,
        DatePicker,
        SpecComponent,
    },
    methods: {
        send() {
            window.events.$emit("loading", true);
            this.form[this.http_verb](this.url)
                .then((result) => {
                    window.events.$emit("loading", false);
                    window.flash(this.message);
                    window.location = "/devices";
                })
                .catch((errors) => {
                    window.events.$emit("loading", false);
                    window.flash("Algo deu errado.", "danger");
                });
        },
        selectedBrand(selectedBrand) {
            window.events.$emit("selected_brand", selectedBrand);
            this.fetch(selectedBrand);
        },
        fetch(brand) {
            window.axios
                .get(`/patterns?brand=${brand.id}`)
                .then((result) => {
                    this.patterns = result.data;

                    this.form.pattern = {};
                })
                .catch((errors) => {
                    window.flash("Algo deu errado", "danger");
                });
        },
        add() {
            this.form.specifications.push({
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
        if (this.device) {
            this.form = new Form({ ...this.device });
            this.patterns = this.patterns_db;
        }

        this.categories = this.categories_db;
        this.brands = this.brands_db;
        this.users = this.users_db;
        this.sellers = this.sellers_db;

        window.events.$on("new_category", (category) => {
            this.categories.push(category);
            this.form.category = category;
        });

        window.events.$on("new_brand", (brand) => {
            this.brands.push(brand);
            this.form.brand = brand;
        });

        window.events.$on("new_pattern", (pattern) => {
            this.patterns.push(pattern);
            this.form.pattern = pattern;
        });

        window.events.$on("new_seller", (seller) => {
            this.sellers.push(seller);
            this.form.seller = seller;
        });

        window.events.$on("add_spec", (formSpec) => {
            this.form.specifications.forEach((spec) => {
                if (spec.id == formSpec.id) {
                    spec.description = formSpec.description;
                    spec.specification = formSpec.specification;
                }
            });
        });

        window.events.$on("remove_spec", (removedSpec) => {
            this.form.specifications.forEach((spec, index) => {
                if (spec.id == removedSpec.id) {
                    this.form.specifications.splice(index, 1);
                }
            });
        });
    },
};
</script>
