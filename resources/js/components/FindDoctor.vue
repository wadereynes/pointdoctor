<template>
    <div>
        <div class="card">
            <div class="card-header">Find Doctors</div>
            <div class="card-body">
                <datepicker></datepicker>
            </div>
        </div>

        <div class="card">
            <div class="card-header">Doctors</div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Expertise</th>
                            <th>Booking</th>
                        </tr>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    import datepicker from 'vuejs-datepicker';
    import moment from 'moment'
    export default{
        data(){
            return{

            }
        },
        components:{
            datepicker
        }
    }
</script>