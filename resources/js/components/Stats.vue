<template>
    <div>
        <h1 class="font-normal text-gray-700 leading-none mb-4" style="font-size: 33px">Stats</h1>

        <ul>

            <li>
                <strong>Total Series:</strong> {{ siteData.lessons }}
            </li>

            <li>
                <strong>Total Series:</strong> {{ siteData.series }}
            </li>

        </ul>

    </div>

</template>

<script>
    export default {

        data(){
            return{
                siteData: []
            };
        },
        created() {
            axios.get("/api/stats").then(response => this.siteData = response.data);
        }
    }
</script>

<style scoped>

</style>
