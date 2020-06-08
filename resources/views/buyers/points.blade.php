@extends('layouts.app2')

@section('content')

                <div class="col-md-12 mt-4 mb-4">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row text-center text-white p-3 mr-1" style="border-radius: 5px; background-color: #02499B;">
                                <div class="col-md-3 m-auto">
                                    <i class="fa fa-chart-line fa-4x"></i>
                                </div>
                                <div class="col-md-9">
                                    <h4>MY POINTS</h4>
                                    <h3><b>400</b></h3>
                                    <p>Total Available Points</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row text-center text-white pt-3 pb-3 mr-1" style="border-radius: 5px; background-color: firebrick;">
                                <div class="col-md-3 m-auto">
                                    <i class="fa fa-chart-pie fa-4x"></i>
                                </div>
                                <div class="col-md-9">
                                    <h3><b>Earned Points:</b> 1,000</h3>
                                    <h3><b>Earned Points:</b> 600</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row text-center  pt-4 pb-4 text-white p-3 mr-1" style="border-radius: 5px; background-color: #02499B;">
                                <div class="col-md-3 m-auto">
                                    <i class="fa fa-shopping-cart fa-4x"></i>
                                </div>
                                <div class="col-md-9">
                                    <h4>Purchase 10 Products to earn 100 points</h4>
                                    <a href="/bloomzonProducts" class="btn btn-danger">Start Shopping</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                        <table class="table text-center table-bordered m-0 p-0">
                            <thead style="background-color:  #003B88; color: #fff; font-size: 16px; vertical-align: middle;">
                                <tr style="height: 60px; text-align: center !important;" class="text-center">
                                    <th class="text-center" style="border: solid 3px #ddd;">MONTH</th>
                                    <th class="text-center" style="border: solid 3px #ddd;">TOTAL PURCHASE </th>
                                    <th class="text-center" style="border: solid 3px #ddd;">POINTS EARNED</th>
                                    <th class="text-center" style="border: solid 3px #ddd;">AVAILABLE POINTS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="height: 60px;">
                                    <td style="border: solid 1px #ddd;">April</td>
                                    <td style="border: solid 1px #ddd;">40</td>
                                    <td style="border: solid 1px #ddd;">400</td>
                                    <td style="border: solid 1px #ddd;">10</td>
                                </tr>
                                <tr style="height: 60px;">
                                    <td style="border: solid 1px #ddd;">April</td>
                                    <td style="border: solid 1px #ddd;">40</td>
                                    <td style="border: solid 1px #ddd;">400</td>
                                    <td style="border: solid 1px #ddd;">10</td>
                                </tr>
                                <tr style="height: 60px;">
                                    <td style="border: solid 1px #ddd;">April</td>
                                    <td style="border: solid 1px #ddd;">40</td>
                                    <td style="border: solid 1px #ddd;">400</td>
                                    <td style="border: solid 1px #ddd;">10</td>
                                </tr>
                                <tr style="height: 60px;">
                                    <td style="border: solid 1px #ddd;">April</td>
                                    <td style="border: solid 1px #ddd;">40</td>
                                    <td style="border: solid 1px #ddd;">400</td>
                                    <td style="border: solid 1px #ddd;">10</td>
                                </tr>
                                <tr style="height: 60px;">
                                    <td style="border: solid 1px #ddd;">April</td>
                                    <td style="border: solid 1px #ddd;">40</td>
                                    <td style="border: solid 1px #ddd;">400</td>
                                    <td style="border: solid 1px #ddd;">10</td>
                                </tr>
                                <tr style="height: 60px;">
                                    <td style="border: solid 1px #ddd;">April</td>
                                    <td style="border: solid 1px #ddd;">40</td>
                                    <td style="border: solid 1px #ddd;">400</td>
                                    <td style="border: solid 1px #ddd;">10</td>
                                </tr>
                                <tr style="height: 60px;">
                                    <td style="border: solid 1px #ddd;">April</td>
                                    <td style="border: solid 1px #ddd;">40</td>
                                    <td style="border: solid 1px #ddd;">400</td>
                                    <td style="border: solid 1px #ddd;">10</td>
                                </tr>
                                <tr style="height: 60px;">
                                    <td style="border: solid 1px #ddd;">April</td>
                                    <td style="border: solid 1px #ddd;">40</td>
                                    <td style="border: solid 1px #ddd;">400</td>
                                    <td style="border: solid 1px #ddd;">10</td>
                                </tr>
                                <tr style="height: 60px;">
                                    <td style="border: solid 1px #ddd;">April</td>
                                    <td style="border: solid 1px #ddd;">40</td>
                                    <td style="border: solid 1px #ddd;">400</td>
                                    <td style="border: solid 1px #ddd;">10</td>
                                </tr>
                                <tr style="height: 60px;">
                                    <td style="border: solid 1px #ddd;">April</td>
                                    <td style="border: solid 1px #ddd;">40</td>
                                    <td style="border: solid 1px #ddd;">400</td>
                                    <td style="border: solid 1px #ddd;">10</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row col-md-12 text-center m-auto">
                            <nav aria-label="Page navigation example">
                              <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                              </ul>
                            </nav>
                        </div>
                </div>
            

            @endsection
