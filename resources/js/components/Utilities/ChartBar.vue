<template>
    <canvas :id="`chart-${id}`"></canvas>
</template>
<script>
export default {
    props: ["id", "url", "title"],
    data() {
        return {
            colors: {
                background: [],
                border: [],
            },
        };
    },
    methods: {
        fetch() {
            axios
                .get(this.url)
                .then((result) => {
                    this.newChart(result.data);
                })
                .catch((errors) => console.log(errors));
        },
        labels(datas) {
            return datas.map((data) => Object.getOwnPropertyNames(data).sort());
        },
        chartData(datas) {
            return datas.map((data) => {
                for (var i in data) {
                    return data[i];
                }
            });
        },
        colorGenerate(data) {
            let color = "";
            for (var i in data) {
                color =
                    "rgba(" +
                    Math.floor(Math.random() * 250) +
                    ", " +
                    Math.floor(Math.random() * 250) +
                    ", " +
                    Math.floor(Math.random() * 250);
                this.colors.background.push(color + ", 0.5)");
                this.colors.border.push(color + ", 1)");
            }
        },
        newChart(data) {
            this.colorGenerate(data);
            new Chart(document.getElementById(`chart-${this.id}`), {
                type: "bar",
                data: {
                    labels: this.labels(data),
                    datasets: [
                        {
                            label: "Equipamentos",
                            data: this.chartData(data),
                            backgroundColor: this.colors.background,
                            borderColor: this.colors.border,
                            borderWidth: 1,
                        },
                    ],
                },
                options: {
                    title: {
                        display: true,
                        text: this.title,
                    },
                    legend: {
                        display: false,
                    },
                },
            });
        },
    },
    created() {
        this.fetch();
    },
};
</script>
