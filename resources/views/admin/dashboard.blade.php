@extends('admin.master')
        @section('content')
            <div class="main-panel">
                <div class="content-wrapper pb-0">
                    <div class="page-header flex-wrap">
                        <div class="header-left">
                            <button class="btn btn-primary mb-2 mb-md-0 mr-2"> Create new document </button>
                            <button class="btn btn-outline-primary bg-white mb-2 mb-md-0"> Import documents </button>
                        </div>
                        <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
                            <div class="d-flex align-items-center">
                                <a href="#">
                                    <p class="m-0 pr-3">Dashboard</p>
                                </a>
                                <a class="pl-3 mr-4" href="#">
                                    <p class="m-0">ADE-00234</p>
                                </a>
                            </div>
                            <button type="button" style="#background-color: #2E7D32" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
                                <i class="mdi mdi-plus-circle"></i> Add Prodcut </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 stretch-card grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between flex-wrap">
                                        <div>
                                            <div class="card-title mb-0">Sales Revenue</div>
                                            <h3 class="font-weight-bold mb-0">$32,409</h3>
                                        </div>
                                        <div>
                                            <div class="d-flex flex-wrap pt-2 justify-content-between sales-header-right">
                                                <div class="d-flex mr-5">
                                                    <button type="button" class="btn btn-social-icon btn-outline-sales">
                                                        <i class="mdi mdi-inbox-arrow-down"></i>
                                                    </button>
                                                    <div class="pl-2">
                                                        <h4 class="mb-0 font-weight-semibold head-count"> $8,217 </h4>
                                                        <span class="font-10 font-weight-semibold text-muted">TOTAL SALES</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex mr-3 mt-2 mt-sm-0">
                                                    <button type="button" class="btn btn-social-icon btn-outline-sales profit">
                                                        <i class="mdi mdi-cash text-info"></i>
                                                    </button>
                                                    <div class="pl-2">
                                                        <h4 class="mb-0 font-weight-semibold head-count"> 2,804 </h4>
                                                        <span class="font-10 font-weight-semibold text-muted">TOTAL PROFIT</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted font-13 mt-2 mt-sm-0"> Your sales monitoring dashboard template. <a class="text-muted font-13" href="#"><u>Learn more</u></a>
                                    </p>
                                    <div class="flot-chart-wrapper">
                                        <div id="flotChart" class="flot-chart">
                                            <canvas class="flot-base"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-8 stretch-card grid-margin">
                            <div class="card">
                                <div class="card-body pb-0">
                                    <h4 class="card-title mb-0">Available Products</h4>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table custom-table text-dark">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Code</th>
                                                <th>price</th>
                                                <th>Description</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <img src="../assets/images/faces/face2.jpg" class="mr-2" alt="image" /> Jacob Jensen </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <span class="pr-2 d-flex align-items-center">85%</span>
                                                        <select id="star-1" name="rating" autocomplete="off">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>32,435</td>
                                                <td>40,234</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="../assets/images/faces/face3.jpg" class="mr-2" alt="image" /> Cecelia Bradley </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <span class="pr-2 d-flex align-items-center">55%</span>
                                                        <select id="star-2" name="rating" autocomplete="off">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>4,36780</td>
                                                <td>765728</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="../assets/images/faces/face4.jpg" class="mr-2" alt="image" /> Leah Sherman </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <span class="pr-2 d-flex align-items-center">23%</span>
                                                        <select id="star-3" name="rating" autocomplete="off">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>2300</td>
                                                <td>22437</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="../assets/images/faces/face5.jpg" class="mr-2" alt="image" /> Ina Curry </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <span class="pr-2 d-flex align-items-center">44%</span>
                                                        <select id="star-4" name="rating" autocomplete="off">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>53462</td>
                                                <td>1,75938</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="../assets/images/faces/face7.jpg" class="mr-2" alt="image" /> Lida Fitzgerald </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <span class="pr-2 d-flex align-items-center">65%</span>
                                                        <select id="star-5" name="rating" autocomplete="off">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>67453</td>
                                                <td>765377</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="../assets/images/faces/face2.jpg" class="mr-2" alt="image" /> Stella Johnson </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <span class="pr-2 d-flex align-items-center">49%</span>
                                                        <select id="star-6" name="rating" autocomplete="off">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>43662</td>
                                                <td>96535</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="../assets/images/faces/face9.jpg" class="mr-2" alt="image" /> Maria Ortiz </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <span class="pr-2 d-flex align-items-center">65%</span>
                                                        <select id="star-7" name="rating" autocomplete="off">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>76555</td>
                                                <td>258546</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <a class="text-black font-13 d-block pt-2 pb-2 pb-lg-0 font-weight-bold pl-4" href="#">Show more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4 stretch-card grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex border-bottom mb-4 pb-2">
                                        <div class="hexagon">
                                            <div class="hex-mid hexagon-warning">
                                                <i class="mdi mdi-clock-outline"></i>
                                            </div>
                                        </div>
                                        <div class="pl-4">
                                            <h6 class="text-muted">Total Vendors</h6>
                                            <h4 class="font-weight-bold text-warning mb-0"> 3 </h4>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom mb-4 pb-2">
                                        <div class="hexagon">
                                            <div class="hex-mid hexagon-danger">
                                                <i class="mdi mdi-account-outline"></i>
                                            </div>
                                        </div>
                                        <div class="pl-4">
                                            <h6 class="text-muted">Total Clients</h6>
                                            <h4 class="font-weight-bold text-danger mb-0">0</h4>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom mb-4 pb-2">
                                        <div class="hexagon">
                                            <div class="hex-mid hexagon-success">
                                                <i class="mdi mdi-laptop-chromebook"></i>
                                            </div>
                                        </div>
                                        <div class="pl-4">
                                            <h4 class="font-weight-bold text-success mb-0"> 0 </h4>
                                            <h6 class="text-muted">Total Products</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom mb-4 pb-2">
                                        <div class="hexagon">
                                            <div class="hex-mid hexagon-info">
                                                <i class="mdi mdi-clock-outline"></i>
                                            </div>
                                        </div>
                                        <div class="pl-4">
                                            <h4 class="font-weight-bold text-info mb-0">12.45</h4>
                                            <h6 class="text-muted">Schedule Meeting</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="hexagon">
                                            <div class="hex-mid hexagon-primary">
                                                <i class="mdi mdi-timer-sand"></i>
                                            </div>
                                        </div>
                                        <div class="pl-4">
                                            <h4 class="font-weight-bold text-primary mb-0"> 12.45 </h4>
                                            <h6 class="text-muted mb-0">Browser Usage</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 stretch-card grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="card-title"> Customers <small class="d-block text-muted">August 01 - August 31</small>
                                        </div>
                                        <div class="d-flex text-muted font-20">
                                            <i class="mdi mdi-printer mouse-pointer"></i>
                                            <i class="mdi mdi-help-circle-outline ml-2 mouse-pointer"></i>
                                        </div>
                                    </div>
                                    <h3 class="font-weight-bold mb-0"> 2,409 <span class="text-success h5">4,5%<i class="mdi mdi-arrow-up"></i></span>
                                    </h3>
                                    <span class="text-muted font-13">Avg customers/Day</span>
                                    <div class="line-chart-wrapper">
                                        <canvas id="linechart" height="80"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 stretch-card grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="card-title"> Conversions <small class="d-block text-muted">August 01 - August 31</small>
                                        </div>
                                        <div class="d-flex text-muted font-20">
                                            <i class="mdi mdi-printer mouse-pointer"></i>
                                            <i class="mdi mdi-help-circle-outline ml-2 mouse-pointer"></i>
                                        </div>
                                    </div>
                                    <h3 class="font-weight-bold mb-0"> 0.40% <span class="text-success h5">0.20%<i class="mdi mdi-arrow-up"></i></span>
                                    </h3>
                                    <span class="text-muted font-13">Avg customers/Day</span>
                                    <div class="bar-chart-wrapper">
                                        <canvas id="barchart" height="80"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            @endsection
