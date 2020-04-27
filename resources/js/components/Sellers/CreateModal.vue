<template>
    <div
        class="modal fade"
        id="createSellerModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Adicionar Fornecedor
                    </h5>
                    <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                        id="close-add-seller"
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
                            <div class="col-md-12">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating"
                                        >Nome</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="seller-name"
                                        id="seller-name"
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
                            <div class="col-md-12">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating"
                                        >CNPJ</label
                                    >
                                    <the-mask
                                        type="text"
                                        class="form-control"
                                        name="cnpj"
                                        id="cnpj"
                                        v-model="form.cnpj"
                                        required
                                        :mask="['##.###.###/####-##']"
                                    />
                                    <small
                                        class="text-danger"
                                        v-text="form.errors.get('cnpj')"
                                        v-if="form.errors.has('cnpj')"
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
import { TheMask } from "vue-the-mask";
export default {
    data() {
        return {
            form: new Form({
                name: "",
                cnpj: "",
            }),
            brands: [],
        };
    },
    components: {
        TheMask,
    },
    methods: {
        send: _.throttle(
            function() {
                window.events.$emit("loading", true);
                this.form
                    .post("/sellers")
                    .then((result) => {
                        window.flash("Fornecedor cadastrado com sucesso!");
                        window.events.$emit("loading", false);
                        window.events.$emit("new_seller", result);
                        document.querySelector("#close-add-seller").click();
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
};
</script>
