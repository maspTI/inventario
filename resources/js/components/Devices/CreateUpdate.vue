<template>
    <form
        class="container-fluid"
        @keydown="form.errors.clear($event.target.name)"
        @submit.prevent="send"
    >
        <div class="row d-flex align-items-end">
            <div class="col-md-4 form-group">
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
            </div>
            <div class="col-md-4 form-group">
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
                        track-by="name"
                        label="name"
                        v-model="form.brands"
                    />
                    <div class="input-group-append">
                        <button class="btn btn-success" type="button">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 form-group">
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
                        track-by="name"
                        label="name"
                        v-model="form.pattern"
                    />
                    <div class="input-group-append">
                        <button class="btn btn-success" type="button">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 form-group">
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
                        track-by="name"
                        label="name"
                        v-model="form.seller"
                    />
                    <div class="input-group-append">
                        <button class="btn btn-success" type="button">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 form-group">
                <label for="category">Funcionário</label>
                <multiselect
                    class="form-control"
                    :options="users"
                    :searchable="true"
                    :allow-empty="true"
                    placeholder="Selecione uma opção"
                    selectLabel="Pressione Enter para selecionar"
                    deselectLabel="Pressione Enter para remover"
                    track-by="name"
                    label="name"
                    v-model="form.user"
                />
            </div>
            <div class="col-md-4 form-group d-flex flex-column">
                <label>Data da Compra</label>
                <date-picker
                    width="100%"
                    format="DD/MM/YYYY"
                    v-model="form.bought_at"
                ></date-picker>
            </div>
            <div class="col-md-4">
                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Nota Fiscal</label>
                    <input
                        type="text"
                        class="form-control"
                        v-model="form.ticket_number"
                    />
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Patrimonio</label>
                    <input
                        type="text"
                        class="form-control"
                        v-model="form.property_tag"
                    />
                </div>
            </div>
            <div class="col-md-12 mt-3">
                <h4>Especificações</h4>
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
import "vue2-datepicker/index.css";
export default {
    props: ["categories", "brands", "users", "patterns", "sellers"],
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
                specifications: {},
                status: "",
            }),
        };
    },
    components: {
        Multiselect,
        DatePicker,
    },
    methods: {
        send() {},
    },
};
</script>
