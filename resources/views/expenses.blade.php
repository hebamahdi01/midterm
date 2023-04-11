
@extends('/layout/App')

@section('content')

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-home">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            Dashboard <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="all_products.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-shopping-cart">
                                <circle cx="9" cy="21" r="1"></circle>
                                <circle cx="20" cy="21" r="1"></circle>
                                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                            </svg>
                            Expenses
                            <form class="form-horizontal" role="form" method="POST" action="/expenses/store">
                                @csrf
                                <div class="form-group">
                                    <label for="title" class="col-md-4 control-label">Title</label>

                                    <div class="col-md-6">
                                        <input id="title" type="text" class="form-control" name="title" value="">

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="category" class="col-md-4 control-label">Category</label>

                                    <div class="col-md-6">


                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="priority" class="col-md-4 control-label">Priority</label>

                                    <div class="col-md-6">
                                        <select id="priority" type="" class="form-control" name="priority">
                                            <option value="">Select Priority</option>
                                            <option value="low">Low</option>
                                            <option value="medium">Medium</option>
                                            <option value="high">High</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="message" class="col-md-4 control-label">Message</label>

                                    <div class="col-md-6">
                                        <textarea rows="10" id="message" class="form-control" name="message"></textarea>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-btn fa-ticket"></i> Open Ticket
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">All Expenses</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <a href="create_product.html" class="btn btn-outline-secondary">Add New Expenses</a>
                    </div>
                </div>
            </div>
            <div class="btn-toolbar mb-2 mb-md-0">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th>Item</th>
                        <th>Item Category</th>
                        <th>Purchase Date</th>
                        <th>Amount</th>
                        <th width="280px">Actions</th>
                    </tr>
                    <tr>
                        <td>Dell Laptop</td>
                        <td>Hardware</td>
                        <td>5 Jan 2019</td>
                        <td>100 $</td>
                        <td>
                            <a class="btn btn-info" href="">Edit</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>MS OFFICE 2022</td>
                        <td>Material</td>
                        <td>5 Jan 2018</td>
                        <td>125 $</td>
                        <td>
                            <a class="btn btn-info" href="">Edit</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>HP Laptop</td>
                        <td>Hardware</td>
                        <td>5 Jan 2018</td>
                        <td>250 $</td>
                        <td>
                            <a class="btn btn-info" href="">Edit</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>

@endsection
