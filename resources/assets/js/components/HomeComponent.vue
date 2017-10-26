<template>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="purple">
                            <i class="material-icons">assignment</i>
                        </div>
                        <div class="card-content">
                            <h4 class="card-title">DataTables.net</h4>
                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>
                            <div v-if="isLoading">
                                Loading...
                            </div>
                            <div class="material-datatables hide" v-bind:class="{ show: !isLoading }">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th class="disabled-sorting text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr v-for="product in products" :key="product.id">
                                            <td>{{ product.id }}</td>
                                            <td>{{ product.name }}</td>
                                            <td>{{ product.category.name }}</td>
                                            <td>{{ product.stocks[product.stocks.length - 1].quantity }}</td>
                                            <td>{{ product.stocks[product.stocks.length - 1].price }}</td>
                                            <td class="text-right">
                                                <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="material-icons">favorite</i></a>
                                                <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="material-icons">dvr</i></a>
                                                <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                isLoading: true,
                products: []
            }
        }, 
        methods: {
            getAllProducts() {
                let $this = this;

                axios.get('/products')
                .then(response => {
                    console.log(response);
                    if(response.data 
                        && _.isArray(response.data)) {
                        $this.products = response.data;
                    }

                    // lets give time to populate data
                    setTimeout(function() {
                        // initialize datatables
                        $this.initDataTables();
                    }, 250);
                })
                .catch(error => {
                    console.log(error);
                    // $this.isLoading = false;
                });
            },
            initDataTables() {
                let $this = this;

                $('#datatables').DataTable({
                    "pagingType": "full_numbers",
                    "lengthMenu": [
                        [10, 25, 50, -1],
                        [10, 25, 50, "All"]
                    ],
                    responsive: true,
                    language: {
                        search: "_INPUT_",
                        searchPlaceholder: "Search records",
                    },
                    "initComplete": function(settings, json) {
                        $this.isLoading = false;
                    }
                });

                var table = $('#datatables').DataTable();

                // Edit record
                table.on('click', '.edit', function(e) {
                    let $tr = $(this).closest('tr');

                    var data = table.row($tr).data();
                    alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
                    e.preventDefault();
                });

                // Delete a record
                table.on('click', '.remove', function(e) {
                    let $tr = $(this).closest('tr');

                    table.row($tr).remove().draw();
                    e.preventDefault();
                });

                //Like record
                table.on('click', '.like', function(e) {
                    let $tr = $(this).closest('tr');

                    alert('You clicked on Like button');
                    e.preventDefault();
                });

                $('.card .material-datatables label').addClass('form-group');
            }
        },
        mounted() {
            console.log('Component mounted.');

            // get all products
            this.getAllProducts();
        }
    }
</script>
