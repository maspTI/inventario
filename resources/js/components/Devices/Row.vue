<template>
    <tr>
        <td class="text-uppercase text-break" v-text="device.property_tag"></td>
        <td
            class="text-capitalize text-break"
            v-text="device.category.name"
        ></td>
        <td
            class="text-capitalize text-break"
            v-text="device.pattern.name"
        ></td>
        <td class="text-capitalize text-break" v-text="device.brand.name"></td>
        <td
            class="text-capitalize text-break"
            v-text="device.holder ? device.holder.name : 'Não informado'"
        ></td>
        <td
            class="text-capitalize text-break"
            v-text="
                device.holder ? device.holder.department.name : 'Não informado'
            "
        ></td>
        <td
            class="text-capitalize text-break"
            v-text="`${device.status ? 'Ativo' : 'Inativo'}`"
        ></td>
        <td>
            <div class="col-md-12 d-flex justify-content-around flex-wrap">
                <button
                    class="btn btn-primary"
                    type="button"
                    data-toggle="modal"
                    data-target="#view_device"
                    @click="view"
                >
                    <i class="fas fa-binoculars"></i>
                </button>
                <button
                    class="btn"
                    :class="{
                        'btn-dark': device.status,
                        'btn-success': !device.status,
                    }"
                    data-toggle="tooltip"
                    data-placement="top"
                    :title="
                        `${
                            device.status
                                ? 'Inativar dispositivo'
                                : 'Ativar dispositivo'
                        }`
                    "
                    @click.prevent="send"
                >
                    <i class="far fa-eye" v-if="!device.status"></i>
                    <i class="far fa-eye-slash" v-else></i>
                </button>
                <a :href="`/devices/${device.id}/edit`" class="btn btn-warning"
                    ><i class="far fa-edit"></i
                ></a>
                <a
                    :href="`/term/${device.id}/delivery`"
                    target="_blank"
                    class="btn btn-success"
                    v-if="device.holder != null"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Termo de entrega"
                >
                    <i class="fas fa-file-upload"></i>
                </a>
                <button
                    class="btn btn-danger"
                    v-if="device.holder != null"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Termo de devolução"
                    @click.prevent="emitTerm"
                >
                    <i class="fas fa-file-download"></i>
                </button>
            </div>
        </td>
    </tr>
</template>
<script>
export default {
    props: ["device"],
    data() {
        return {};
    },
    methods: {
        view() {
            window.events.$emit("quick_view", this.device);
        },
        send: _.throttle(
            function() {
                axios
                    .patch(`/devices/${this.device.id}`, {
                        change_status: true,
                    })
                    .then((result) => {
                        this.device.status = result.data.status;
                        this.device.holder = result.data.holder;
                        window.flash("Status alterado com sucesso!");
                    })
                    .catch((errors) =>
                        window.flash(
                            "Aldo deu errado. Contate o setor de TI",
                            "danger"
                        )
                    );
            },
            500,
            { trailing: false }
        ),
        emitTerm() {
            swal.fire({
                title: "Receber o equipamento?",
                text: `Você desvinculará o equipamento do usuário ${this.device.holder.name}`,
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ok",
                cancelButtonText: "Cancelar",
            }).then((result) => {
                if (result.value) {
                    axios
                        .patch(`/devices/${this.device.id}`, { refund: true })
                        .then((result) => {
                            this.device.holder = null;
                            window.open(result.data.url);
                            window.flash("Equipamento entregue com sucesso.");
                        })
                        .catch((errors) => {
                            console.error(errors);
                            window.flash("Algo deu errado.", "danger");
                        });
                }
            });
        },
    },
};
</script>
