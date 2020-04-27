<template>
    <div class="col-md-12 mb-3 border">
        <div class="row d-flex align-items-center">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Especificação</label>
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Processador"
                        v-model="form.specification"
                        v-if="edit"
                    />
                    <span v-else v-text="form.specification"></span>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <div class="form-group">
                        <label>Descrição</label>
                        <textarea
                            class="form-control"
                            rows="3"
                            placeholder="i5 9th geração"
                            v-model="form.description"
                            v-if="edit"
                        ></textarea>
                        <span v-else v-text="form.description"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <button
                    class="btn"
                    :class="`${edit ? 'btn-dark' : 'btn-warning'}`"
                    @click.prevent="add"
                    v-text="`${edit ? 'Adicionar' : 'Editar'}`"
                >
                    Adicionar
                </button>
                <button class="btn btn-danger" @click.prevent="remove">
                    Remover
                </button>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: ["id"],
    data() {
        return {
            form: {
                specification: "",
                description: "",
            },
            edit: true,
        };
    },
    methods: {
        add() {
            if (this.form.specification != "" && this.form.description != "") {
                if (this.edit) {
                    this.form.id = this.id;
                    window.events.$emit("add_spec", this.form);
                }

                this.edit = !this.edit;
                return;
            }
            window.flash(
                "Preencha os campos para adicionar uma especificação.",
                "danger"
            );
        },
        remove() {
            window.events.$emit("remove_spec", this.id);
        },
    },
};
</script>
