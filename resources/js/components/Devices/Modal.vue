<template>
    <div
        class="modal fade"
        id="view_device"
        tabindex="-1"
        role="dialog"
        aria-labelledby="view_device"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" v-if="device.hasOwnProperty('id')">
                <div class="modal-header">
                    <h5
                        class="modal-title text-capitalize"
                        id="view_device"
                        v-text="`${device.brand.name} - ${device.pattern.name}`"
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
                            <div class="col-md-4" v-if="device.holder">
                                <span
                                    class="text-capitalize text-break font-weight-bolder text-muted"
                                    >Funcionário: </span
                                ><span
                                    class="text-capitalize text-break"
                                    v-text="device.holder.name"
                                ></span>
                            </div>
                            <div class="col-md-4" v-if="device.holder">
                                <span
                                    class="text-capitalize text-break font-weight-bolder text-muted"
                                    >Departamento: </span
                                ><span
                                    class="text-capitalize text-break"
                                    v-text="
                                        `${device.holder.department.name} ${
                                            device.holder.subdepartment
                                                ? ' - ' +
                                                  device.holder.subdepartment
                                                      .name
                                                : ''
                                        }`
                                    "
                                ></span>
                            </div>
                            <div class="col-md-4" v-if="device.bought_at">
                                <span
                                    class="text-capitalize text-break font-weight-bolder text-muted"
                                    >Data da Compra: </span
                                ><span
                                    class="text-capitalize text-break"
                                    v-text="bought_at"
                                ></span>
                            </div>
                            <div class="col-md-4">
                                <span
                                    class="text-capitalize text-break font-weight-bolder text-muted"
                                    >Tipo: </span
                                ><span
                                    class="text-capitalize text-break"
                                    v-text="device.category.name"
                                ></span>
                            </div>
                            <div class="col-md-4">
                                <span
                                    class="text-capitalize text-break font-weight-bolder text-muted"
                                    >Marca: </span
                                ><span
                                    class="text-capitalize text-break"
                                    v-text="device.brand.name"
                                ></span>
                            </div>
                            <div class="col-md-4">
                                <span
                                    class="text-capitalize text-break font-weight-bolder text-muted"
                                    >Modelo: </span
                                ><span
                                    class="text-capitalize text-break"
                                    v-text="device.pattern.name"
                                ></span>
                            </div>
                            <div class="col-md-4">
                                <span
                                    class="text-capitalize text-break font-weight-bolder text-muted"
                                    >Patrimônio: </span
                                ><span
                                    class="text-uppercase text-break"
                                    v-text="device.property_tag"
                                ></span>
                            </div>
                            <div class="col-md-4" v-if="device.serial_number">
                                <span
                                    class="text-capitalize text-break font-weight-bolder text-muted"
                                    >Número de Série: </span
                                ><span
                                    class="text-uppercase text-break"
                                    v-text="device.serial_number"
                                ></span>
                            </div>
                            <div class="col-md-4" v-if="device.seller">
                                <span
                                    class="text-capitalize text-break font-weight-bolder text-muted"
                                    >Fornecedor: </span
                                ><span
                                    class="text-uppercase text-break"
                                    v-text="device.seller.name"
                                ></span>
                            </div>
                            <div class="col-md-4" v-if="device.ticket_number">
                                <span
                                    class="text-capitalize text-break font-weight-bolder text-muted"
                                    >Nota Fiscal: </span
                                ><span
                                    class="text-uppercase text-break"
                                    v-text="device.ticket_number"
                                ></span>
                            </div>
                            <div
                                class="col-md-4"
                                v-for="spec in device.specifications"
                                :key="spec.id"
                            >
                                <span
                                    class="text-capitalize text-break font-weight-bolder text-muted"
                                    v-text="`${spec.specification}: `"
                                ></span
                                ><span
                                    class="text-uppercase text-break"
                                    v-text="spec.description"
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
            device: {},
        };
    },
    computed: {
        bought_at() {
            return window.moment(this.device.bought_at).format("DD/MM/YYYY");
        },
    },
    created() {
        window.events.$on("quick_view", (device) => {
            this.device = device;
        });
    },
};
</script>
