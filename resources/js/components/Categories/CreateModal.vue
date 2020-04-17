<template>
    <div
        class="modal fade"
        id="createCategoryModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Adicionar Categoria
                    </h5>
                    <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                    >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating"
                                        >Nome</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        v-model="form.name"
                                        required
                                    />
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
    data() {
        return {
            form: new Form({
                name: "",
            }),
        };
    },
    methods: {
        send: _.throttle(
            function() {
                window.events.$emit("loading", true);
                this.form
                    .post("categories")
                    .then((result) => {
                        window.flash("Algo deu errado.", "danger");
                        window.events.$emit("loading", false);
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
