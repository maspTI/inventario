<template>
    <div
        class="modal fade"
        id="view_licence"
        tabindex="-1"
        role="dialog"
        aria-labelledby="view_licence"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" v-if="licence.hasOwnProperty('id')">
                <div class="modal-header">
                    <h5
                        class="modal-title text-capitalize"
                        id="view_licence"
                        v-text="licence.name"
                    ></h5>
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
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4" v-if="licence.bought_at">
                                <span
                                    class="text-capitalize text-break font-weight-bolder text-muted"
                                    >Data da Compra: </span
                                ><span
                                    class="text-capitalize text-break"
                                    v-text="bought_at"
                                ></span>
                            </div>
                            <div class="col-md-4" v-if="licence.due_date">
                                <span
                                    class="text-capitalize text-break font-weight-bolder text-muted"
                                    >Data da Renovação : </span
                                ><span
                                    class="text-capitalize text-break"
                                    v-text="due_date"
                                ></span>
                            </div>
                            <div class="col-md-4" v-if="licence.value">
                                <span
                                    class="text-capitalize text-break font-weight-bolder text-muted"
                                    >Valor : </span
                                ><span
                                    class="text-capitalize text-break"
                                    v-text="`R$ ${licence.value}`"
                                ></span>
                            </div>
                            <div class="col-md-4" v-if="licence.seller">
                                <span
                                    class="text-capitalize text-break font-weight-bolder text-muted"
                                    >Fornecedor: </span
                                ><span
                                    class="text-uppercase text-break"
                                    v-text="licence.seller.name"
                                ></span>
                            </div>
                            <div
                                class="col-md-4"
                                v-for="note in licence.notes"
                                :key="note.id"
                            >
                                <span
                                    class="text-capitalize text-break font-weight-bolder text-muted"
                                    v-text="`${note.specification}: `"
                                ></span
                                ><span
                                    class="text-uppercase text-break"
                                    v-text="note.description"
                                ></span>
                            </div>
                            <div class="col-md-12" v-if="licence.description">
                                <span
                                    class="text-capitalize text-break font-weight-bolder text-muted"
                                    >Descrição: </span
                                ><span
                                    class="text-uppercase text-break"
                                    v-text="licence.description"
                                ></span>
                            </div>
                        </div>
                    </div>
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
            licence: {},
        };
    },
    computed: {
        bought_at() {
            return window.moment(this.licence.bought_at).format("DD/MM/YYYY");
        },
        due_date() {
            return window.moment(this.licence.due_date).format("DD/MM/YYYY");
        },
    },
    created() {
        window.events.$on("quick_view", (licence) => {
            this.licence = licence;
        });
    },
};
</script>
