<template>
    <tr>
        <td class="text-uppercase text-break" v-text="licence.name"></td>
        <td class="text-capitalize text-break" v-text="due_date"></td>
        <td class="text-capitalize text-break" v-text="renewal_term"></td>
        <td
            class="text-capitalize text-break"
            v-text="`R$ ${licence.value}`"
        ></td>
        <td
            class="text-capitalize text-break"
            v-text="`${licence.status ? 'Ativo' : 'Inativo'}`"
        ></td>
        <td>
            <div class="col-md-12 d-flex justify-content-around flex-wrap">
                <button
                    class="btn btn-primary"
                    type="button"
                    data-toggle="modal"
                    data-target="#view_licence"
                    @click="view"
                >
                    <i class="fas fa-binoculars"></i>
                </button>
                <button
                    class="btn"
                    :class="{
                        'btn-dark': licence.status,
                        'btn-success': !licence.status,
                    }"
                    data-toggle="tooltip"
                    data-placement="top"
                    :title="
                        `${
                            licence.status
                                ? 'Inativar dispositivo'
                                : 'Ativar dispositivo'
                        }`
                    "
                    @click.prevent="send"
                >
                    <i class="far fa-eye" v-if="!licence.status"></i>
                    <i class="far fa-eye-slash" v-else></i>
                </button>
                <a
                    :href="`/licences/${licence.id}/edit`"
                    class="btn btn-warning"
                    ><i class="far fa-edit"></i
                ></a>
            </div>
        </td>
    </tr>
</template>
<script>
export default {
    props: ["licence"],
    data() {
        return {};
    },
    computed: {
        due_date() {
            if (this.licence.renewal_term != "lifelong")
                return moment(this.licence.due_date).format("DD/MM/YYYY");
            return "Vitalícia";
        },
        renewal_term() {
            if (this.licence.renewal_term == "lifelong") return "Vitalícia";
            else if (this.licence.renewal_term == "daily") return "Diária";
            else if (this.licence.renewal_term == "weekly") return "Semanal";
            else if (this.licence.renewal_term == "biweekly")
                return "Quinzenal";
            else if (this.licence.renewal_term == "monthly") return "Mensal";
            else if (this.licence.renewal_term == "bimonthly")
                return "Bimestral";
            else if (this.licence.renewal_term == "quarterly")
                return "Trimestral";
            else if (this.licence.renewal_term == "semiannual")
                return "Semestral";
            else if (this.licence.renewal_term == "yearly") return "Anual";
            else if (this.licence.renewal_term == "biennial") return "Bienal";
        },
    },
    methods: {
        view() {
            window.events.$emit("quick_view", this.licence);
        },
        send: _.throttle(
            function() {
                axios
                    .patch(`/licences/${this.licence.id}`, {
                        change_status: true,
                    })
                    .then((result) => {
                        this.licence.status = result.data.status;
                        this.licence.holder = result.data.holder;
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
    },
};
</script>
