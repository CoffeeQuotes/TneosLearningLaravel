@extends('layouts.app')
@section('page_title','Contact Us, Tneos Eduloution Ltd')
@section('content')

    <div class="section">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12">
                    <h2 class="font-weight-lighter" style="color: #32373D!important; font-weight: lighter!important;">
                        Contact Us</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12 mb-5">
                    <address>
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="16.465px" height="16.465px" viewBox="0 0 59.465 59.465"
                             style="enable-background:new 0 0 59.465 59.465;"
                             xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M58.862,33.886L45.045,20.069v-9.112c0-1.136-0.921-2.056-2.056-2.056c-1.137,0-2.057,0.92-2.057,2.056v5.001L31.185,6.21
                                        c-0.801-0.803-2.104-0.803-2.905,0L0.603,33.886c-0.803,0.804-0.803,2.104,0,2.907c0.802,0.803,2.104,0.803,2.907,0L29.732,10.57
                                        l26.223,26.223c0.401,0.398,0.93,0.604,1.455,0.604c0.522,0,1.051-0.201,1.452-0.604C59.665,35.988,59.665,34.689,58.862,33.886z"
                                    />
                                    <path d="M52.979,36.245L31.185,14.449c-0.385-0.385-0.908-0.602-1.454-0.602c-0.545,0-1.068,0.217-1.453,0.602L6.484,36.245
                                        c-0.291,0.288-0.487,0.659-0.565,1.062c-0.061,0.314-0.091,0.633-0.091,0.942v10.638c0,2.739,2.229,4.971,4.969,4.971h10.638
                                        c1.378,0,2.707-0.582,3.645-1.599c0.854-0.923,1.324-2.12,1.324-3.373v-7.812c0-1.896,1.453-3.48,3.33-3.658
                                        c1.878,0.178,3.331,1.762,3.331,3.658v7.812c0,1.252,0.472,2.45,1.324,3.373c0.938,1.017,2.269,1.599,3.646,1.599h10.638
                                        c2.74,0,4.971-2.229,4.971-4.972V38.252c0-0.312-0.031-0.63-0.092-0.941C53.471,36.904,53.271,36.533,52.979,36.245z"/>
                                </g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                        </svg>
                        <strong><b>Tneos Eduloutions Ltd.</b></strong> <br/>
                        L323, L-Block,<br/>
                        Mahipalpur Extension<br/>
                        New Delhi-110037, India <br/>
                        <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgMzg0IDM4NCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMzg0IDM4NDsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik0zNTMuMTg4LDI1Mi4wNTJjLTIzLjUxLDAtNDYuNTk0LTMuNjc3LTY4LjQ2OS0xMC45MDZjLTEwLjcxOS0zLjY1Ni0yMy44OTYtMC4zMDItMzAuNDM4LDYuNDE3bC00My4xNzcsMzIuNTk0DQoJCQljLTUwLjA3My0yNi43MjktODAuOTE3LTU3LjU2My0xMDcuMjgxLTEwNy4yNmwzMS42MzUtNDIuMDUyYzguMjE5LTguMjA4LDExLjE2Ny0yMC4xOTgsNy42MzUtMzEuNDQ4DQoJCQljLTcuMjYtMjEuOTktMTAuOTQ4LTQ1LjA2My0xMC45NDgtNjguNTgzQzEzMi4xNDYsMTMuODIzLDExOC4zMjMsMCwxMDEuMzMzLDBIMzAuODEzQzEzLjgyMywwLDAsMTMuODIzLDAsMzAuODEzDQoJCQlDMCwyMjUuNTYzLDE1OC40MzgsMzg0LDM1My4xODgsMzg0YzE2Ljk5LDAsMzAuODEzLTEzLjgyMywzMC44MTMtMzAuODEzdi03MC4zMjNDMzg0LDI2NS44NzUsMzcwLjE3NywyNTIuMDUyLDM1My4xODgsMjUyLjA1MnoiDQoJCQkvPg0KCTwvZz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K" style="width: 16px;" />+91 997-111-0599 / +91 991-061-6099 <br/>( Monday-Sunday, 09:00 AM -10:00 PM IST )<br/>
                        <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE2LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgd2lkdGg9IjU1MC43OTVweCIgaGVpZ2h0PSI1NTAuNzk1cHgiIHZpZXdCb3g9IjAgMCA1NTAuNzk1IDU1MC43OTUiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDU1MC43OTUgNTUwLjc5NTsiDQoJIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik01MDEuNjEzLDQ5MS43ODJjMTIuMzgxLDAsMjMuMTA5LTQuMDg4LDMyLjIyOS0xMi4xNkwzNzcuNzkzLDMyMy41NjdjLTMuNzQ0LDIuNjgxLTcuMzczLDUuMjg4LTEwLjgwMSw3Ljc2Nw0KCQkJYy0xMS42NzgsOC42MDQtMjEuMTU2LDE1LjMxOC0yOC40MzQsMjAuMTI5Yy03LjI3Nyw0LjgyMi0xNi45NTksOS43MzctMjkuMDQ1LDE0Ljc1NWMtMTIuMDk0LDUuMDI0LTIzLjM2MSw3LjUyOC0zMy44MTMsNy41MjgNCgkJCWgtMC4zMDZoLTAuMzA2Yy0xMC40NTMsMC0yMS43Mi0yLjUwMy0zMy44MTMtNy41MjhjLTEyLjA5My01LjAxOC0yMS43NzUtOS45MzMtMjkuMDQ1LTE0Ljc1NQ0KCQkJYy03LjI3Ny00LjgxMS0xNi43NS0xMS41MjQtMjguNDM0LTIwLjEyOWMtMy4yNTYtMi4zODctNi44NjctNS4wMDYtMTAuNzcxLTcuODA5TDE2Ljk0Niw0NzkuNjIyDQoJCQljOS4xMTksOC4wNzIsMTkuODU0LDEyLjE2LDMyLjIzNCwxMi4xNkg1MDEuNjEzeiIvPg0KCQk8cGF0aCBkPSJNMzEuMDQ3LDIyNS4yOTlDMTkuMzcsMjE3LjUxNCw5LjAxNSwyMDguNTk4LDAsMTk4LjU1NVY0MzUuOThsMTM3LjU0MS0xMzcuNTQxDQoJCQlDMTEwLjAyNSwyNzkuMjI5LDc0LjU3MiwyNTQuODc3LDMxLjA0NywyMjUuMjk5eiIvPg0KCQk8cGF0aCBkPSJNNTIwLjA1OSwyMjUuMjk5Yy00MS44NjUsMjguMzM2LTc3LjQ0Nyw1Mi43My0xMDYuNzUsNzMuMTk1bDEzNy40ODYsMTM3LjQ5MlYxOTguNTU1DQoJCQlDNTQxLjk4LDIwOC4zOTYsNTMxLjczNiwyMTcuMzA2LDUyMC4wNTksMjI1LjI5OXoiLz4NCgkJPHBhdGggZD0iTTUwMS42MTMsNTkuMDEzSDQ5LjE4MWMtMTUuNzg0LDAtMjcuOTE5LDUuMzMtMzYuNDIsMTUuOTc5QzQuMjUzLDg1LjY0NiwwLjAwNiw5OC45NywwLjAwNiwxMTQuOTQ5DQoJCQljMCwxMi45MDcsNS42MzYsMjYuODkyLDE2LjkwMyw0MS45NTljMTEuMjY3LDE1LjA2MSwyMy4yNTYsMjYuODkxLDM1Ljk2MSwzNS40OTZjNi45NjUsNC45MjEsMjcuOTY5LDE5LjUyMyw2My4wMTIsNDMuODAxDQoJCQljMTguOTE3LDEzLjEwOSwzNS4zNjgsMjQuNTM1LDQ5LjUwNSwzNC4zOTVjMTIuMDUsOC4zOTYsMjIuNDQyLDE1LjY2NywzMS4wMjIsMjEuNzAxYzAuOTg1LDAuNjkxLDIuNTM0LDEuNzk5LDQuNTksMy4yNjkNCgkJCWMyLjIxNSwxLjU5MSw1LjAxOCwzLjYxLDguNDc2LDYuMTA3YzYuNjU5LDQuODE2LDEyLjE5MSw4LjcwOSwxNi41OTcsMTEuNjgzYzQuNCwyLjk3NSw5LjczMSw2LjI5OCwxNS45ODUsOS45ODgNCgkJCWM2LjI0OSwzLjY4NSwxMi4xNDMsNi40NTYsMTcuNjc1LDguMjk5YzUuNTMzLDEuODQyLDEwLjY1NSwyLjc2NiwxNS4zNjcsMi43NjZoMC4zMDZoMC4zMDZjNC43MTEsMCw5LjgzNC0wLjkyNCwxNS4zNjgtMi43NjYNCgkJCWM1LjUzMS0xLjg0MywxMS40Mi00LjYwOCwxNy42NzQtOC4yOTljNi4yNDgtMy42OSwxMS41NzItNy4wMiwxNS45ODYtOS45ODhjNC40MDYtMi45NzQsOS45MzgtNi44NjYsMTYuNTk4LTExLjY4Mw0KCQkJYzMuNDUxLTIuNDk3LDYuMjU0LTQuNTE3LDguNDY5LTYuMTAyYzIuMDU3LTEuNDc2LDMuNjA1LTIuNTc3LDQuNTk2LTMuMjc0YzYuNjg0LTQuNjUxLDE3LjEtMTEuODkyLDMxLjEwNC0yMS42MTYNCgkJCWMyNS40ODItMTcuNzA1LDYzLjAxLTQzLjc2NCwxMTIuNzQyLTc4LjI4MWMxNC45NTctMTAuNDQ3LDI3LjQ1My0yMy4wNTQsMzcuNDk2LTM3LjgwM2MxMC4wMjUtMTQuNzQ5LDE1LjA1MS0zMC4yMiwxNS4wNTEtNDYuNDA4DQoJCQljMC0xMy41MjUtNC44NzMtMjUuMDk4LTE0LjU5OC0zNC43MzdDNTI2LjQ2MSw2My44MjksNTE0LjkzMiw1OS4wMTMsNTAxLjYxMyw1OS4wMTN6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=" style="width: 16px;" /> <a href="mailto:enquiry@tneos.com"> enquiry@tneos.com</a>
                    </address>
                    <h3 class="font-weight-lighter" style="font-size: 30px; color: #32373D!important; font-weight: lighter!important;">
                        Our Global Network</h3>
                    <ul>
                        <li><span class="pr-2">&#8226;</span><a href="/our-network-world" target="_blank" ><b>Overseas</b></a><li/>
                        <li><span class="pr-2">&#8226;</span><a href="/our-network" target="_blank"><b>India</b></a></li>
                    </ul>

                    <hr style="color: #828282;">
                    <h4 class="font-weight-lighter" style="color: #32373D!important; font-weight: lighter!important;">
                        Follow Us</h4>
                    <a href="https://www.facebook.com/tneoseduloutions" target="_blank" >
                        <img src="https://img.icons8.com/fluent/48/000000/facebook-new.png"/></a>
                    <a href="https://twitter.com/TneosL" class="mx-4" target="_blank">
                        <img src="https://img.icons8.com/fluent/50/000000/twitter.png"/>
                    </a>
                    <a href="https://www.instagram.com/tneoslearning/" target="_blank">
                        <img src="https://img.icons8.com/officel/40/000000/instagram-new.png"/></a>
                </div>
                <div class="col-md-8 col-sm-12">
                    <div class="card p-5 mb-5">
                        <form id="contact-form" method="POST" role="form" action="{{route('contactus')}}">
                            @csrf
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"><label for="form_name" style="color: #5f6368;">Firstname <span class="text-danger">*</span></label> <input
                                                id="form_name" type="text" name="firstname" class="form-control bg-transparent text-dark"
                                                placeholder="Firstname*" required="required" style="border: 0; border: 1px dotted #828282; font-size: 12px; font-style: italic; color: #828282!important;"
                                                data-error="Firstname is required."></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label for="form_lastname" style="color: #5f6368;">Lastname <span class="text-danger">*</span></label> <input
                                                id="form_lastname" type="text" name="lastname" class="form-control bg-transparent text-dark"
                                                placeholder="Lastname *" required="required" style="border: 0; border-radius: 0 ; border: 1px dotted #828282; font-size: 12px; font-style: italic; color: #828282!important;"
                                                data-error="Lastname is required."></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"><label for="form_email" style="color: #5f6368;">Email <span class="text-danger">*</span></label> <input
                                                id="form_email" type="email" name="email" class="form-control bg-transparent text-dark"
                                                placeholder="Email *" required="required" style="border: 0;  border: 1px dotted #828282; font-size: 12px; font-style: italic; color: #828282!important;"
                                                data-error="Valid email is required."></div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"><label for="form_email" style="color: #5f6368;">Phone <span class="text-danger">*</span></label> <input
                                                id="form_email" type="text" name="phone" class="form-control bg-transparent text-dark"
                                                placeholder="Phone *" required="required"
                                                data-error="Valid phone is required." pattern="^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$" style="border: 0; border-radius: 0 ; border: 1px dotted #828282; font-size: 12px; font-style: italic; color: #828282!important;"></div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"><label for="form_message" style="color: #5f6368;">Message <span class="text-danger">*</span></label> <textarea
                                                id="form_message" name="message" class="form-control bg-transparent text-dark"
                                                placeholder="Write your message here." rows="4" required="required"
                                                data-error="Please, leave us a message." style="border: 0;  border: 1px dotted #828282; font-size: 12px; font-style: italic; color: #828282!important;"></textarea></div>
                                    </div>

                                </div>
                            </div>
                            <input type="submit" class="btn btn-danger " value="Send Message">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
