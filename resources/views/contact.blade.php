@extends('master')
@section('dynamic_content1')
    <h1>Contact Details</h1>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-12 ">
                <div class="row">
                    <div class="col-lg-3 col-md-3 contact_card">
                        <br>
                        &nbsp;&nbsp;&nbsp; <i class="fa-solid fa-map-location-dot fa-2x"></i>
                    </div>
                    <div class="col-lg-9 col-md-9 col-12 contact_card">
                        <br>
                        <b class="line">Main Campus</b>
                        <br>
                        <br>
                        RK University, Bhavnagar Highway, Kasturbadham, Rajkot, Gujarat, India 360020
                        <br>
                        <br>

                        <b class="line">City Campus</b>
                        <br><br>
                        New 150ft Ring Road,Mota Mawa,Kalawad Road,Rajkot, Gujarat, India 360004.
                        <br><br>

                    </div>

                </div>
                <br>
                <div class=" row">
                    <div class="col-lg-3 col-md-3 contact_card">
                        <br>
                        &nbsp;&nbsp;&nbsp; <span class="fa-solid fa-phone-volume fa-2x"></span>
                    </div>
                    <div class="col-lg-9 col-md-9 col-12 contact_card">
                        <br>
                        <b class="line"> Contact Number:</b>
                        <br>
                        <br>
                        +91-9712489122
                        <br>
                        +91-9925714450
                        <br>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-12">
                <h4 class="line">Contact Us</h4>
                <br>
                <form method="post" action="Contact_master_insert.php">
                    <div class="row">
                        <div class="col">
                            <input type="text" name="fn" placeHolder="Fullname" id="fn1" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <input type="text" name="em" placeHolder="Email" id="em1" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <input type="text" name="sub" placeHolder="Subject" id="sub1" class="form-control">
                        </div>
                        <div class="col">
                            <input type="text" name="phn" placeHolder="Phone" id="phn1" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <textarea name="message" id="message1" rows="5" placeholder="Message" class="form-control"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <input type="submit" value="Send Your Message" name="btn-message" class="btn btn-danger">
                            <input type="reset" value="Reset" name="btn-message" class="btn btn-danger">
                        </div>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692.994085791611!2d70.89866591473812!3d22.240303185354783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959b4a660019ee9%3A0x3d6254f36ed0e794!2sRK%20UNIVERSITY!5e0!3m2!1sen!2sin!4v1677221945451!5m2!1sen!2sin"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" height="500px"
                width="360px"></iframe>
        </div>
        <div class="col-lg-8 col-md-8 col-12">
            <h4 class="line">Important Contacts</h4>
            <br>
            <div class="col-12 col-md-12 col-lg-12">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#flamingo" role="tab"
                            aria-controls="pills-flamingo" aria-selected="true"
                            style="color:red;background-color:lightgrey;">University Office Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#cuckoo" role="tab" aria-controls="pills-cuckoo"
                            aria-selected="false" style="color:red;background-color:lightgrey">Key Contacts</a>
                    </li>
                </ul>
                <div class="tab-content mt-3">
                    <div class="tab-pane fade show active" id="flamingo" role="tabpanel" aria-labelledby="flamingo-tab">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th colspan="3">University Office Contacts</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Vice Chancellor</td>
                                    <td>vc@rku.ac.in</td>
                                    <td>Tel: 9909952030 Ext : 103</td>
                                </tr>
                                <tr>
                                    <td>Registrar</td>
                                    <td>registrar@rku.ac.in</td>
                                    <td>Tel: 9909952030 Ext : 103</td>
                                </tr>
                                <tr>
                                    <td>Doctoral Studies (Ph. D.)</td>
                                    <td>fdsr@rku.ac.in</td>
                                    <td>Tel. 9909952030 – Ext : 121</td>
                                </tr>
                                <tr>
                                    <td>Central Training & Placement Cell</td>
                                    <td>tpo@rku.ac.in</td>
                                    <td>Tel. 9909952030 – Ext : 157</td>
                                </tr>
                                <tr>
                                    <td>HR Department</td>
                                    <td>hr@rku.ac.in</td>
                                    <td>Tel. 9909952030 – Ext : 130</td>
                                </tr>
                                <tr>
                                    <td>Controller of Examinations</td>
                                    <td>coe@rku.ac.in</td>
                                    <td>Tel. 9909952030 – Ext : 161</td>
                                </tr>
                                <tr>
                                    <td>Account Section</td>
                                    <td>hitesh.popat@rku.ac.in</td>
                                    <td>Tel: 9909952030 – Ext : 147</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="cuckoo" role="tabpanel" aria-labelledby="profile-tab">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th colspan="3">Key Contacts</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Admissions</td>
                                    <td>inquiry@rku.ac.in</td>
                                    <td>Tel: 9909952030 Ext : 1187</td>
                                </tr>
                                <tr>
                                    <td>Public Relations Officer</td>
                                    <td>pr@rku.ac.in</td>
                                    <td>Tel: 9909952030 Ext : 181</td>
                                </tr>
                                <tr>
                                    <td>Anti Ragging Cell</td>
                                    <td>nirav.bhatt@rku.ac.in</td>
                                    <td>Tel. 9909952030 – Ext : 141</td>
                                </tr>
                                <tr>
                                    <td>Internal Complaints Committee</td>
                                    <td> sheetal.pandya@rku.ac.in</td>
                                    <td>Tel. 9909952030 – Ext : 142</td>
                                </tr>
                                <tr>
                                    <td>Hostel Warden</td>
                                    <td>hr2@rku.ac.in</td>
                                    <td>Tel. 9909952030 – Ext : 602</td>
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
    </div>
    <br>
    <br>
@endsection
