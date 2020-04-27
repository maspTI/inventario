<template>
    <div
        class="modal fade"
        id="createPatternModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Adicionar Modelo
                    </h5>
                    <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                        id="close-add-pattern"
                    >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form
                        class="container-fluid"
                        @keydown="form.errors.clear($event.target.name)"
                        @submit.prevent="send"
                    >
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="category">Marca</label>
                                <select
                                    name="pattern_brand"
                                    id="pattern_brand"
                                    class="form-control"
                                    v-model="form.brand"
                                >
                                    <option
                                        v-for="brand in brands"
                                        :key="brand.id"
                                        :value="brand.id"
                                        v-text="brand.name"
                                    ></option>
                                </select>
                                <small
                                    class="text-danger"
                                    v-text="form.errors.get('brand')"
                                    v-if="form.errors.has('brand')"
                                ></small>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating"
                                        >Nome</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="pattern-name"
                                        id="pattern-name"
                                        v-model="form.name"
                                        required
                                        autofocus
                                    />
                                    <small
                                        class="text-danger"
                                        v-text="form.errors.get('name')"
                                        v-if="form.errors.has('name')"
                                    ></small>
                                </div>
                            </div>
                            <submit-button />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import Form from "../../form-validation/Form";
export default {
    props: ["brands_db"],
    data() {
        return {
            form: new Form({
                brand: "",
                name: "",
            }),
            brands: [],
        };
    },
    methods: {
        send: _.throttle(
            function() {
                window.events.$emit("loading", true);
                this.form
                    .post("/patterns")
                    .then((result) => {
                        window.flash("Modelo cadastrado com sucesso!");
                        window.events.$emit("loading", false);
                        window.events.$emit("new_pattern", result);
                        document.querySelector("#close-add-pattern").click();
                    })
                    .catch((errors) => {
                        window.flash("Algo deu errado.", "danger");
                        window.events.$emit("loading", false);
                    });
            },
            1000,
            { trailing: false }
        ),
    },
    created() {
        this.brands = this.brands_db;

        window.events.$on("new_brand", (brand) => {
            this.brands.push(brand);
        });

        window.events.$on("selected_brand", (brand) => {
            this.form.brand = brand.id;
        });
    },
};
</script>
