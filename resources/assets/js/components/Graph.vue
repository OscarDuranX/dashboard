<template>
    <div>
        <canvas ref="canvas"></canvas>
        <div v-html="legend"></div>
    </div>
</template>

<script>
    import Chart from 'chart.js'
    export default {
        props: {
            url: {
                type: String
            },
            larabel: {
                type: Array
            },
            values: {
                type: Array
            }
        },
        mounted() {
            fetch(this.url, {
                method: 'get'
            }).then()
            })
            console.log('Component mounted.')
            var data = {
                labels: this.labels,
                datasets: [
                    {
                        data: this.values
                    }
                ]
            }
            var context = document.querySelector('#graph').getContext('2d')
            let chart=new Chart(context,{
                type: "bar",
                data: data,
            })
            this.legend = chart.generateLegend()
        },

    }
</script>