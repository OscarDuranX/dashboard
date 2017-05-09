<template>
    <div>
        <canvas ref="canvas"></canvas>
        <div v-html="legend"></div>
    </div>
</template>

<script>
    import Chart from 'chart.js'
    export default {
        data() {
            return {
                legend:''
            }
        },
        props: ['labels','values'],
        mounted() {
            console.log('Component mounted.')
            let data = {
                labels: this.labels,
                datasets: [
                    {
                        data: this.values
                    }
                ]
            }
            console.log(this)
            let context = this.$refs.canvas.getContext('2d')
            let chart = new Chart(context,{
                type: "bar",
                data: data,
            })
            this.legend = chart.generateLegend()
        }
    }
</script>