<template>
    <canvas id="graph"></canvas>
    {{ legend }}
</template>

<script>
    import Chart from 'chart.js'
    export default {
        props: {
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