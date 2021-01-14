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
                        <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgMzg0IDM4NCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMzg0IDM4NDsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik0zNTMuMTg4LDI1Mi4wNTJjLTIzLjUxLDAtNDYuNTk0LTMuNjc3LTY4LjQ2OS0xMC45MDZjLTEwLjcxOS0zLjY1Ni0yMy44OTYtMC4zMDItMzAuNDM4LDYuNDE3bC00My4xNzcsMzIuNTk0DQoJCQljLTUwLjA3My0yNi43MjktODAuOTE3LTU3LjU2My0xMDcuMjgxLTEwNy4yNmwzMS42MzUtNDIuMDUyYzguMjE5LTguMjA4LDExLjE2Ny0yMC4xOTgsNy42MzUtMzEuNDQ4DQoJCQljLTcuMjYtMjEuOTktMTAuOTQ4LTQ1LjA2My0xMC45NDgtNjguNTgzQzEzMi4xNDYsMTMuODIzLDExOC4zMjMsMCwxMDEuMzMzLDBIMzAuODEzQzEzLjgyMywwLDAsMTMuODIzLDAsMzAuODEzDQoJCQlDMCwyMjUuNTYzLDE1OC40MzgsMzg0LDM1My4xODgsMzg0YzE2Ljk5LDAsMzAuODEzLTEzLjgyMywzMC44MTMtMzAuODEzdi03MC4zMjNDMzg0LDI2NS44NzUsMzcwLjE3NywyNTIuMDUyLDM1My4xODgsMjUyLjA1MnoiDQoJCQkvPg0KCTwvZz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K" style="width: 16px;" />+91 880-097-8784 / +91 991-061-6099 <br/>( Monday-Sunday, 09:00 AM -10:00 PM IST )<br/>
                        <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE2LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgd2lkdGg9IjU1MC43OTVweCIgaGVpZ2h0PSI1NTAuNzk1cHgiIHZpZXdCb3g9IjAgMCA1NTAuNzk1IDU1MC43OTUiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDU1MC43OTUgNTUwLjc5NTsiDQoJIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik01MDEuNjEzLDQ5MS43ODJjMTIuMzgxLDAsMjMuMTA5LTQuMDg4LDMyLjIyOS0xMi4xNkwzNzcuNzkzLDMyMy41NjdjLTMuNzQ0LDIuNjgxLTcuMzczLDUuMjg4LTEwLjgwMSw3Ljc2Nw0KCQkJYy0xMS42NzgsOC42MDQtMjEuMTU2LDE1LjMxOC0yOC40MzQsMjAuMTI5Yy03LjI3Nyw0LjgyMi0xNi45NTksOS43MzctMjkuMDQ1LDE0Ljc1NWMtMTIuMDk0LDUuMDI0LTIzLjM2MSw3LjUyOC0zMy44MTMsNy41MjgNCgkJCWgtMC4zMDZoLTAuMzA2Yy0xMC40NTMsMC0yMS43Mi0yLjUwMy0zMy44MTMtNy41MjhjLTEyLjA5My01LjAxOC0yMS43NzUtOS45MzMtMjkuMDQ1LTE0Ljc1NQ0KCQkJYy03LjI3Ny00LjgxMS0xNi43NS0xMS41MjQtMjguNDM0LTIwLjEyOWMtMy4yNTYtMi4zODctNi44NjctNS4wMDYtMTAuNzcxLTcuODA5TDE2Ljk0Niw0NzkuNjIyDQoJCQljOS4xMTksOC4wNzIsMTkuODU0LDEyLjE2LDMyLjIzNCwxMi4xNkg1MDEuNjEzeiIvPg0KCQk8cGF0aCBkPSJNMzEuMDQ3LDIyNS4yOTlDMTkuMzcsMjE3LjUxNCw5LjAxNSwyMDguNTk4LDAsMTk4LjU1NVY0MzUuOThsMTM3LjU0MS0xMzcuNTQxDQoJCQlDMTEwLjAyNSwyNzkuMjI5LDc0LjU3MiwyNTQuODc3LDMxLjA0NywyMjUuMjk5eiIvPg0KCQk8cGF0aCBkPSJNNTIwLjA1OSwyMjUuMjk5Yy00MS44NjUsMjguMzM2LTc3LjQ0Nyw1Mi43My0xMDYuNzUsNzMuMTk1bDEzNy40ODYsMTM3LjQ5MlYxOTguNTU1DQoJCQlDNTQxLjk4LDIwOC4zOTYsNTMxLjczNiwyMTcuMzA2LDUyMC4wNTksMjI1LjI5OXoiLz4NCgkJPHBhdGggZD0iTTUwMS42MTMsNTkuMDEzSDQ5LjE4MWMtMTUuNzg0LDAtMjcuOTE5LDUuMzMtMzYuNDIsMTUuOTc5QzQuMjUzLDg1LjY0NiwwLjAwNiw5OC45NywwLjAwNiwxMTQuOTQ5DQoJCQljMCwxMi45MDcsNS42MzYsMjYuODkyLDE2LjkwMyw0MS45NTljMTEuMjY3LDE1LjA2MSwyMy4yNTYsMjYuODkxLDM1Ljk2MSwzNS40OTZjNi45NjUsNC45MjEsMjcuOTY5LDE5LjUyMyw2My4wMTIsNDMuODAxDQoJCQljMTguOTE3LDEzLjEwOSwzNS4zNjgsMjQuNTM1LDQ5LjUwNSwzNC4zOTVjMTIuMDUsOC4zOTYsMjIuNDQyLDE1LjY2NywzMS4wMjIsMjEuNzAxYzAuOTg1LDAuNjkxLDIuNTM0LDEuNzk5LDQuNTksMy4yNjkNCgkJCWMyLjIxNSwxLjU5MSw1LjAxOCwzLjYxLDguNDc2LDYuMTA3YzYuNjU5LDQuODE2LDEyLjE5MSw4LjcwOSwxNi41OTcsMTEuNjgzYzQuNCwyLjk3NSw5LjczMSw2LjI5OCwxNS45ODUsOS45ODgNCgkJCWM2LjI0OSwzLjY4NSwxMi4xNDMsNi40NTYsMTcuNjc1LDguMjk5YzUuNTMzLDEuODQyLDEwLjY1NSwyLjc2NiwxNS4zNjcsMi43NjZoMC4zMDZoMC4zMDZjNC43MTEsMCw5LjgzNC0wLjkyNCwxNS4zNjgtMi43NjYNCgkJCWM1LjUzMS0xLjg0MywxMS40Mi00LjYwOCwxNy42NzQtOC4yOTljNi4yNDgtMy42OSwxMS41NzItNy4wMiwxNS45ODYtOS45ODhjNC40MDYtMi45NzQsOS45MzgtNi44NjYsMTYuNTk4LTExLjY4Mw0KCQkJYzMuNDUxLTIuNDk3LDYuMjU0LTQuNTE3LDguNDY5LTYuMTAyYzIuMDU3LTEuNDc2LDMuNjA1LTIuNTc3LDQuNTk2LTMuMjc0YzYuNjg0LTQuNjUxLDE3LjEtMTEuODkyLDMxLjEwNC0yMS42MTYNCgkJCWMyNS40ODItMTcuNzA1LDYzLjAxLTQzLjc2NCwxMTIuNzQyLTc4LjI4MWMxNC45NTctMTAuNDQ3LDI3LjQ1My0yMy4wNTQsMzcuNDk2LTM3LjgwM2MxMC4wMjUtMTQuNzQ5LDE1LjA1MS0zMC4yMiwxNS4wNTEtNDYuNDA4DQoJCQljMC0xMy41MjUtNC44NzMtMjUuMDk4LTE0LjU5OC0zNC43MzdDNTI2LjQ2MSw2My44MjksNTE0LjkzMiw1OS4wMTMsNTAxLjYxMyw1OS4wMTN6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=" style="width: 16px;" /> <a href="mailto:enquiry@tneos.com"> enquiry@tneos.com</a>
                    </address>
                    <hr style="color: #828282;">
                    <h4 class="font-weight-lighter" style="color: #32373D!important; font-weight: lighter!important;">
                        Follow Us</h4>
                    <a href="https://www.facebook.com/tneoseduloutions" target="_blank" ><img src="data:image/svg+xml;base64,PHN2ZyBpZD0iQ2FwYV8xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHdpZHRoPSI1MTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGc+PHBhdGggZD0ibTIyMi42MiA2MC4zMTVjLTU5LjQ2OCAwLTExNS4zNzUgMjMuMjA3LTE1Ny40MjMgNjUuMzQ3LTQyLjA0MyA0Mi4xMzQtNjUuMTk3IDk4LjE1MS02NS4xOTcgMTU3LjczNCAwIDYyLjQ0NiAyNi4xNTggMTIyLjAwMyA3MS45MzggMTY0LjIxNGwtMy41NzEgNDAuOTY2Yy0uMjkzIDMuMzY3IDEuMTM0IDYuNjU0IDMuNzk0IDguNzM5IDIuNjU5IDIuMDg1IDYuMTk0IDIuNjg0IDkuMzkzIDEuNTk1bDQzLjY0Ni0xNC44NzFjMzAuNDUyIDE0Ljg5MSA2My4yMDYgMjIuNDM4IDk3LjQyIDIyLjQzOCA1OS40NjggMCAxMTUuMzc1LTIzLjIwNyAxNTcuNDIzLTY1LjM0NyA0Mi4wNDItNDIuMTM0IDY1LjE5Ni05OC4xNTEgNjUuMTk2LTE1Ny43MzRzLTIzLjE1NC0xMTUuNjAxLTY1LjE5Ni0xNTcuNzM0Yy00Mi4wNDgtNDIuMTQtOTcuOTU1LTY1LjM0Ny0xNTcuNDIzLTY1LjM0N3ptMCA0MjYuMTYzYy0zMi40NDkgMC02My40NDQtNy40NTMtOTIuMTIzLTIyLjE1My0xLjQyNi0uNzMtMi45OTEtMS4xMDEtNC41NjItMS4xMDEtMS4wODcgMC0yLjE3Ny4xNzctMy4yMjUuNTM0bC0zMy4wODYgMTEuMjczIDIuNjcxLTMwLjY0NmMuMjc2LTMuMTY1LS45NjktNi4yNzMtMy4zNTQtOC4zNzMtNDMuODEzLTM4LjU4My02OC45NDEtOTQuMjA5LTY4Ljk0MS0xNTIuNjE2IDAtMTExLjk3OSA5MC44OTUtMjAzLjA4MSAyMDIuNjItMjAzLjA4MXMyMDIuNjIgOTEuMTAyIDIwMi42MiAyMDMuMDgxLTkwLjg5NiAyMDMuMDgyLTIwMi42MiAyMDMuMDgyeiIvPjxwYXRoIGQ9Im0zODkuNTIxIDUuNTIyYy01LjUyMyAwLTEwIDQuNDc4LTEwIDEwczQuNDc3IDEwIDEwIDEwYzU2LjUwNyAwIDEwMi40NzkgNDYuMDgyIDEwMi40NzkgMTAyLjcyNSAwIDUuNTIyIDQuNDc3IDEwIDEwIDEwczEwLTQuNDc4IDEwLTEwYzAtNjcuNjcxLTU0Ljk0NC0xMjIuNzI1LTEyMi40NzktMTIyLjcyNXoiLz48cGF0aCBkPSJtNDAwLjA0MiA1Ni4xMmMtNS41MjMgMC0xMCA0LjQ3OC0xMCAxMHM0LjQ3NyAxMCAxMCAxMGMyMi44NjcgMCA0MS40NzEgMTguNjU0IDQxLjQ3MSA0MS41ODMgMCA1LjUyMiA0LjQ3NyAxMCAxMCAxMHMxMC00LjQ3OCAxMC0xMGMwLTMzLjk1Ny0yNy41NzYtNjEuNTgzLTYxLjQ3MS02MS41ODN6Ii8+PHBhdGggZD0ibTI4OS4zNzcgMTQxLjk3MWgtNDIuMDc3Yy0xNy44MDQgMC0zNC43IDcuMDgyLTQ3LjU3NSAxOS45NDEtMTIuODczIDEyLjg1Ni0xOS45NjMgMjkuNzI0LTE5Ljk2MyA0Ny40OTN2MzEuMDgzaC0yMy45Yy0xMC40OCAwLTE5LjAwNyA4LjUyNi0xOS4wMDcgMTkuMDA3djMxLjM0OWMwIDEwLjQ4IDguNTI2IDE5LjAwNyAxOS4wMDcgMTkuMDA3aDIzLjl2MTA0Ljk3MmMwIDUuNTIyIDQuNDc3IDEwIDEwIDEwaDQ5LjI2YzUuNTIzIDAgMTAtNC40NzggMTAtMTB2LTEwNC45NzJoNDAuMzU1YzEwLjQ4IDAgMTkuMDA3LTguNTI2IDE5LjAwNy0xOS4wMDd2LTMxLjM0OWMwLTEwLjQ4LTguNTI2LTE5LjAwNy0xOS4wMDctMTkuMDA3aC00MC4zNTV2LTIyLjgwNWMwLTQuMzQzIDIuMTExLTYuNDU0IDYuNDU0LTYuNDU0aDMzLjkwMWMxMC40OCAwIDE5LjAwNy04LjUyNiAxOS4wMDctMTkuMDA3di0zMS4yNDVjMC0xMC40OC04LjUyNy0xOS4wMDYtMTkuMDA3LTE5LjAwNnptLS45OTMgNDkuMjU4aC0zMi45MDhjLTE1LjMyOSAwLTI2LjQ1NCAxMS4xMjYtMjYuNDU0IDI2LjQ1NHYzMi44MDVjMCA1LjUyMiA0LjQ3NyAxMCAxMCAxMGg0OS4zNjJ2MjkuMzYyaC00OS4zNjJjLTUuNTIzIDAtMTAgNC40NzgtMTAgMTB2MTA0Ljk3MmgtMjkuMjZ2LTEwNC45NzFjMC01LjUyMi00LjQ3Ny0xMC0xMC0xMGgtMzIuOTA3di0yOS4zNjJoMzIuOTA3YzUuNTIzIDAgMTAtNC40NzggMTAtMTB2LTQxLjA4M2MwLTI1LjcxMiAyMS43Ny00Ny40MzUgNDcuNTM4LTQ3LjQzNWg0MS4wODN2MjkuMjU4eiIvPjwvZz48L3N2Zz4=" style="width: 32px;" /></a>
                    <a href="https://twitter.com/TneosL" class="mx-4" target="_blank"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNNDM3LjAxOSw3NC45ODFDMzg4LjY2NywyNi42MjgsMzI0LjM3OSwwLDI1NiwwUzEyMy4zMzMsMjYuNjI4LDc0Ljk4MSw3NC45ODFDMjYuNjI4LDEyMy4zMzMsMCwxODcuNjIxLDAsMjU2DQoJCQlzMjYuNjI4LDEzMi42NjcsNzQuOTgxLDE4MS4wMTlDMTIzLjMzMyw0ODUuMzcyLDE4Ny42MjEsNTEyLDI1Niw1MTJzMTMyLjY2Ny0yNi42MjgsMTgxLjAxOS03NC45ODFTNTEyLDMyNC4zNzksNTEyLDI1Ng0KCQkJUzQ4NS4zNzIsMTIzLjMzMyw0MzcuMDE5LDc0Ljk4MXogTTI1Niw0OTUuODMyQzEyMy43NTYsNDk1LjgzMiwxNi4xNjgsMzg4LjI0NCwxNi4xNjgsMjU2UzEyMy43NTYsMTYuMTY4LDI1NiwxNi4xNjgNCgkJCVM0OTUuODMyLDEyMy43NTYsNDk1LjgzMiwyNTZTMzg4LjI0NCw0OTUuODMyLDI1Niw0OTUuODMyeiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNNDM2LjM1MiwxNjIuMzkxYy0yLjQzMy0yLjEwNC01Ljk1OC0yLjQ2My04Ljg3NS0xLjExYy00LjE4MywxLjk0LTguNDU3LDMuNjQ0LTEyLjgwNiw1LjEwNw0KCQkJYzQuMzEzLTUuODg0LDcuNzU4LTEyLjQyMiwxMC4xODgtMTkuNDMyYzEuMDAyLTIuODkxLDAuNTAzLTYuMTc2LTEuNTY5LTguNDI3Yy0yLjU5My0yLjgxNC02LjcyMy0zLjQwNi05Ljk2My0xLjU2DQoJCQljLTExLjgxNSw2LjczMy0yNC41NTgsMTEuMzA2LTM3LjkzMSwxMy42MThjLTE0Ljk1OC0xMy43MjktMzQuMjAxLTIxLjI0LTU0LjY0My0yMS4yNGMtNDIuMzEzLDAtNzcuMTQ3LDMyLjY0Mi04MC42NDgsNzQuMDY1DQoJCQljLTguNzQxLTEuMzY0LTI1Ljg0NC02LjI0MS0yOS45MzMtNy41NzhjLTI5LjU4MS0xMC4wNzUtNTYuMjI4LTI3LjgxNC03Ny4wNzUtNTEuMzA3Yy0xLjIzNi0xLjM5My0yLjg2NC0yLjQyOS00LjY5NS0yLjc2NA0KCQkJYy0zLjY4LTAuNjcyLTcuMTcxLDEuMTg2LTguNzQ1LDQuMzM5Yy01LjE4MSwxMC4zODMtNy44MDksMjEuNTQ4LTcuODA5LDMzLjE4NWMwLDE2LjA5Myw1LjAzOCwzMS4yNjEsMTQuMTEzLDQzLjczDQoJCQljLTIuODI4LTAuNTMxLTUuODM4LDAuNDYyLTcuODEyLDIuODljLTEuMTM1LDEuMzk2LTEuNzAzLDMuMTY4LTEuNzcsNC45NjZjLTAuMDMsMC44Mi0wLjA1NywxLjY0My0wLjA1NywyLjQ3Mg0KCQkJYzAsMjEuODE3LDkuOTksNDEuNjQ2LDI2LjEzNiw1NC41ODhjLTEuMTE1LDAuNzU1LTIuMDU1LDEuNzk3LTIuNzAzLDMuMDgyYy0wLjk2MywxLjkwNC0xLjA3LDQuMTQzLTAuNDM0LDYuMTc4DQoJCQljNy4wNTIsMjIuNTU5LDI0LjU3MiwzOS43MzksNDYuMjkyLDQ2Ljc4MWMtMTkuNjczLDExLjk3Ni00Mi40MjksMTguNDM0LTY1LjY3OSwxOC40MzRjLTIuMDUzLDAtNC4xNjYtMC4wNTMtNi4yNzktMC4xNTYNCgkJCWMtNC4wNDYtMC4xODUtNy42NzUsMi42MzktOC4zNzEsNi43NDRjLTAuNTY4LDMuMzQ5LDEuMTYyLDYuNjk4LDQuMDg3LDguNDIzYzI5LjcxOCwxNy41MjksNjMuNzM0LDI2Ljc5Miw5OC4zOSwyNi43OTINCgkJCWM0MS4zNjEsMCw4MC43NTgtMTIuODgxLDExMy42MDctMzYuNzI1YzQuMDUyLTIuOTQyLDQuNDk5LTguODIxLDAuOTU5LTEyLjM2MmwtMC4wMDMtMC4wMDMNCgkJCWMtMi44NTItMi44NTItNy4zMzgtMy4xNTktMTAuNjA1LTAuNzkzYy0yOS4yNzUsMjEuMTk4LTY1LjIwNywzMy43MTQtMTAzLjk1OSwzMy43MTRjLTIxLjcxOSwwLTQzLjE2Mi0zLjk2OC02My4yNTUtMTEuNjENCgkJCWMyNC4zMDMtNC4yNjgsNDcuMjc1LTE0LjgwOCw2Ni40MDktMzAuNzEyYzIuMzEyLTEuOTIyLDMuNTI5LTQuOTYyLDIuOTQ3LTcuOTExYy0wLjc0NC0zLjc2Ny0zLjk3Mi02LjQzLTcuNzA3LTYuNTM1DQoJCQljLTE5LjY4Ni0wLjU1OC0zNy4yNi0xMS40MzUtNDYuNjk4LTI4LjA2YzQuNTAxLTAuMjE2LDkuMDA2LTAuODMyLDEzLjQ0LTEuODQxYzMuMzgyLTAuNzcsNi4xMTktMy40NzIsNi41NTktNi45MTMNCgkJCWMwLjUyOS00LjE0Mi0yLjEzNC03LjkyNS02LjA4NS04Ljg5N2MtMjEuMTE3LTUuMi0zNi42NDctMjIuMzY0LTQwLjE0LTQzLjI1NmM2LjE5LDEuNDUxLDEyLjYyNCwyLjA5MiwxOS4wNDcsMS44OTYNCgkJCWMzLjk2My0wLjExOSw3LjMxNy0zLjEwOSw3Ljc5Mi03LjE2NmMwLjM3NC0zLjE5Ni0xLjMyMy02LjI5MS00LjA3LTcuOTY2Yy0xNy41MjktMTAuNjgyLTI3Ljk4NS0yOS4yNzItMjcuOTg1LTQ5Ljc4Mw0KCQkJYzAtNS4wMTQsMC42MjMtOS45MTcsMS44NTktMTQuNjY1YzIxLjE5MywyMC45NTQsNDYuOTE0LDM2LjkyMiw3NS4wODYsNDYuNTE4YzAuMjU4LDAuMDg4LDI4LjA5Myw4Ljc1NCwzOC42MzYsOC43OTcNCgkJCWMwLjY4OCwwLjAxNywzLjk3NSwwLjE2MiwzLjk4LDAuMTYyYzMuMzg4LDAuMTM3LDYuNjczLTEuOTE5LDcuOTUzLTUuMzI2YzAuMzY4LTAuOTc4LDAuNTAyLTIuMDMsMC40NzctMy4wNzQNCgkJCWMtMC4wMTEtMC40NzEtMC4wMjMtMC45NDItMC4wMjMtMS40MTZjMC0zNS43MTMsMjkuMDU1LTY0Ljc2OCw2NC43NjktNjQuNzY4YzE3LjQ4NywwLDMzLjg3OCw2Ljg3Miw0Ni4xNTgsMTkuMzQ4DQoJCQljMS43NzcsMS44MDcsNC4yODIsMi42OTcsNi43OTMsMi4zNDljOC4yMjctMS4xNDEsMTYuMjU2LTMuMDI1LDI0LjAzNy01LjYzMmMtNC4xNDIsNC41NDQtOS4wMjUsOC40MzctMTQuNTAyLDExLjUwNA0KCQkJYy0zLjY5MiwyLjA2Ny01LjI1OCw2LjU1OC0zLjUxOCwxMC40MTVsMC4xMTksMC4yNjRjMS40MjQsMy4xNTIsNC42OTEsNS4wNDUsOC4xMzYsNC43MmM2LjY4Ny0wLjYzOCwxMy4yODItMS43MzksMTkuNzUzLTMuMjkxDQoJCQljLTUuNzI1LDUuOTA0LTEyLjAyLDExLjI2Ny0xOC44NDksMTYuMDUxYy0yLjIyOCwxLjU2MS0zLjUwOSw0LjE0Ny0zLjQxNiw2Ljg2NWwwLjAxNywwLjUxMWMwLjAxOSwwLjU1MywwLjA0LDEuMTA3LDAuMDQsMS42NjQNCgkJCXYwLjczMWMtMC4xODYsNDUuMjktMTcuNDYxLDg2LjY1NC00NS42NjgsMTE3Ljk5NGMtMi44ODIsMy4yMDEtMi43MDIsOC4xMTcsMC4zNDQsMTEuMTYzYzMuMzEyLDMuMzEyLDguNzIsMy4xNTEsMTEuODU1LTAuMzMyDQoJCQljMzEuNjkxLTM1LjIwOCw0OS4yMjQtODAuMTgsNDkuNjMzLTEyNy45MDJjMTQuNDIyLTEwLjc0MywyNi41OTUtMjMuODc2LDM2LjIyNy0zOS4wOTMNCgkJCUM0NDAuMDI5LDE2OS41LDQzOS40MzQsMTY1LjA1Nyw0MzYuMzUyLDE2Mi4zOTF6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=" style="width: 32px;" /></a>
                    <a href="https://www.instagram.com/tneoslearning/" target="_blank"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNNDM3LjAxOSw3NC45ODFDMzg4LjY2NywyNi42MjgsMzI0LjM3OSwwLDI1NiwwUzEyMy4zMzMsMjYuNjI4LDc0Ljk4MSw3NC45ODFDMjYuNjI4LDEyMy4zMzMsMCwxODcuNjIxLDAsMjU2DQoJCQlzMjYuNjI4LDEzMi42NjcsNzQuOTgxLDE4MS4wMTlDMTIzLjMzMyw0ODUuMzcyLDE4Ny42MjEsNTEyLDI1Niw1MTJzMTMyLjY2Ny0yNi42MjgsMTgxLjAxOS03NC45ODFTNTEyLDMyNC4zNzksNTEyLDI1Ng0KCQkJUzQ4NS4zNzIsMTIzLjMzMyw0MzcuMDE5LDc0Ljk4MXogTTI1Niw0OTUuODMyQzEyMy43NTYsNDk1LjgzMiwxNi4xNjgsMzg4LjI0NCwxNi4xNjgsMjU2UzEyMy43NTYsMTYuMTY4LDI1NiwxNi4xNjgNCgkJCVM0OTUuODMyLDEyMy43NTYsNDk1LjgzMiwyNTZTMzg4LjI0NCw0OTUuODMyLDI1Niw0OTUuODMyeiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNMzQ3Ljg0NSw5Ny4wMTFIMTY0LjE1NWMtMzcuMDI0LDAtNjcuMTQ0LDMwLjEyMS02Ny4xNDQsNjcuMTQ0djE4My42OTJjMCwzNy4wMjIsMzAuMTIxLDY3LjE0Myw2Ny4xNDQsNjcuMTQzaDE4My42OTINCgkJCWMzNy4wMjIsMCw2Ny4xNDMtMzAuMTIxLDY3LjE0My02Ny4xNDRWMTY0LjE1NUM0MTQuOTg5LDEyNy4xMzEsMzg0Ljg2OSw5Ny4wMTEsMzQ3Ljg0NSw5Ny4wMTF6IE0zOTguODIxLDM0Ny44NDUNCgkJCWMwLDI4LjEwOC0yMi44NjgsNTAuOTc2LTUwLjk3Niw1MC45NzZIMTY0LjE1NWMtMjguMTA4LDAtNTAuOTc2LTIyLjg2OC01MC45NzYtNTAuOTc2VjE2NC4xNTUNCgkJCWMwLTI4LjEwOCwyMi44NjgtNTAuOTc2LDUwLjk3Ni01MC45NzZoMTgzLjY5MmMyOC4xMDcsMCw1MC45NzUsMjIuODY4LDUwLjk3NSw1MC45NzZWMzQ3Ljg0NXoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggZD0iTTMzOS40MDIsMjUxLjIyYy0yLjM5MS00Mi41MzMtMzcuMDAyLTc2Ljc1LTc5LjU1OC03OC42NjljLTQ5LjEwOC0yLjIxNC04OS41MzUsMzguMjMyLTg3LjI5Miw4Ny4zNDYNCgkJCWMxLjk0NSw0Mi41NiwzNi4xOSw3Ny4xNTQsNzguNzI4LDc5LjUxYzE3Ljk1MSwwLjk5NSwzNC43NjItMy43MjcsNDguODAzLTEyLjQ5NGM0LjM3NC0yLjczMSw1LjA4Ny04LjgxNCwxLjQ0MS0xMi40NTkNCgkJCWMtMC4wMzktMC4wMzktMC4wNzctMC4wNzctMC4xMTUtMC4xMTVjLTIuNjU3LTIuNjU4LTYuNzc4LTMuMDU5LTkuOTcxLTEuMDc1Yy0xMC40OTEsNi41MTktMjIuODkyLDEwLjI0MS0zNi4xNTgsMTAuMTAyDQoJCQljLTM3LjQ1NS0wLjM5NC02Ny42NzYtMzEuODQ0LTY2LjYyMS02OS4yODZjMS4wNjEtMzcuNjgxLDMzLjIxNS02Ny43MjEsNzEuNjU3LTY1LjMxMmMzMy4xMjYsMi4wNzYsNjAuMDksMjguNDksNjIuODE5LDYxLjU2OQ0KCQkJYzEuMTExLDEzLjQ3NS0xLjc4NywyNi4yMDYtNy42MSwzNy4xNTdjLTEuNjY3LDMuMTM2LTEuMTUzLDYuOTgyLDEuMzU4LDkuNDkzYzAuMDQxLDAuMDQxLDAuMDgzLDAuMDgzLDAuMTI0LDAuMTI0DQoJCQljMy43NzMsMy43NzMsMTAuMTU0LDIuODg2LDEyLjY3NS0xLjgxNkMzMzYuNjY0LDI4Mi4yNjksMzQwLjMwMSwyNjcuMTk3LDMzOS40MDIsMjUxLjIyeiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8Y2lyY2xlIGN4PSIzNDIuMjMyIiBjeT0iMTU4Ljk4OSIgcj0iMjEuNTU4Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=" style="width:32px;" /></a>
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
