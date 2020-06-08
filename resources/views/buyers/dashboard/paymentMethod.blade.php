@extends('layouts.app2')

@section('content')
<div class="col-md-10">
                <div class="row col-md-12 text-center" style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white">
                    <h1 class="text-center m-auto pt-3 pb-3"><b>Update Card Details</b></h1>
                </div>
                <div class="row mb-3" style="background-color: #fff !important; padding: 20px;">
                    <div class="col-md-6 p-5 offset-3">
                        <form>
                            <div class="form-group text-center">
                                <img src="asset/img/card.png" alt="">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1" style="font-size: 16px;;">Bank: </label>
                                
                                    <select name="bank_name" class="form-control select2" data-placeholder="Select Bank" style="width: 100%;">
                    <option value="">Select Bank</option>
                     <option value="Access Bank">Access Bank Plc</option>
                     <option value="Access Money">Access Money</option>
                     <option value="Aso Savings and Loans">Aso Savings and Loans</option>
                     <option value="Cellulant">Cellulant</option>
                     <option value="ChamsMobile">ChamsMobile</option>
                     <option value="Citi Bank">Citi Bank</option>
                     <option value="Convenant Microfinance Bank">Convenant Microfinance Bank</option>
                     <option value="Coronation Merchant Bank">Coronation Merchant Bank</option>
                     <option value="Diamond Bank Plc">Diamond Bank Plc</option>
                     <option value="Eartholeum">Eartholeum</option>
                     <option value="EcoBank Nigeria Plc">EcoBank Nigeria Plc</option>
                     <option value=">EcoMobile">EcoMobile</option>
                     <option value="Enterprise Bank">Enterprise Bank</option>
                     <option value="Etranzact">Etranzact</option>
                     <option value="FET">FET</option>
                     <option value="Fidelity Bank Plc">Fidelity Bank Plc</option>
                     <option value="Fidelity Mobile">Fidelity Mobile</option>
                     <option value="First Bank of Nigeria Plc">First Bank of Nigeria Plc</option>
                     <option value="First City Monument Bank">First City Monument Bank</option>
                     <option value="Fortis Microfinance Bank">Fortis Microfinance Bank</option>
                     <option value="FortisMobile">FortisMobile</option>
                     <option value="FSDH">FSDH</option>
                     <option value="GTMobile">GTMobile</option>
                     <option value="Guaranty Trust Bank">Guaranty Trust Bank</option>
                     <option value="Hedonmark">Hedonmark</option>
                     <option value="Heritage Bank">Heritage Bank</option>
                     <option value="JAIZ Bank plc">JAIZ Bank plc</option>
                     <option value="Jubilee Life Mortgage Bank">Jubilee Life Mortgage Bank</option>
                     <option value="Keystone Bank plc">Keystone Bank plc</option>
                     <option value="Kuda Bank">Kuda Bank</option>
                     <option value="MKudi">MKudi</option>
                     <option value="MoneyBox">MoneyBox</option>
                     <option value="NIP Virtual Bank">NIP Virtual Bank</option>
                     <option value="NPF Microfinance Bank">NPF Microfinance Bank</option>
                     <option value="PagaTech">PagaTech</option>
                     <option value="Parralex">Parralex</option>
                     <option value="PayAttitude Online">PayAttitude Online</option>
                     <option value="Paycom">Paycom</option>
                     <option value="Providus Bank">Providus Bank</option>
                     <option value="ReadyCash Parkway">ReadyCash Parkway</option>
                     <option value="SafeTrust Mortgage Bank">SafeTrust Mortgage Bank</option>
                     <option value="Skye Bank">Skye Bank</option>
                     <option value="Stanbic IBTC Bank">Stanbic IBTC Bank</option>
                     <option value="Stanbic Mobile Money">Stanbic Mobile Money</option>
                     <option value="Standard Chartered Bank of Nigeria">Standard Chartered Bank of Nigeria</option>
                     <option value="Sterling Bank">Sterling Bank</option>
                     <option value="Sterling Mobile">Sterling Mobile</option>
         
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1" style="font-size: 16px;;">Account Number: </label>
                                <input type="text" class="form-control" placeholder="0000000000">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1" style="font-size: 16px;;">Mobile Number: </label>
                                <input type="text" class="form-control" placeholder="0000000000">
                            </div>

                            <div class="form-group text-center">
                                <a href="verify-account.html" class="btn btn-danger btn-rounded btn-lg">Save</a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
@endsection
