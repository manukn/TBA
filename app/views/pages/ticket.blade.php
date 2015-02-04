@extends('layout.master')
@section('head_last')
    {{HTML::style('assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css')}}
    {{HTML::style('assets/plugins/star/css/star-rating.min.css')}}

    {{HTML::script('assets/plugins/star/js/star-rating.min.js')}}
@stop


@section('page')

    <ul class="breadcrumb">
        <li>
            <p>HOME</p>
        </li>
        <li><a href="#" class="active">Support</a></li>
    </ul>
    <div class="pull-right actions">
        <h3>New Ticket</h3><button class="btn btn-fab btn-raised btn-material-red" type="button" id="btn-new-ticket"><i class="mdi-content-add"></i> </button>
    </div>


    <div class="pull-right actions">

    </div>



    <div class="page-title">
        <h1>Support</h1>


        <div class="clearfix"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box simple light animated" id="new-ticket-wrapper" style="display:none">
                <div class="box-title no-border">
                    <h4 class="semi-bold">How can we help you?</h4>
                </div>
                <div class="box-body">
                    <form class="" method="POST" id="new-ticket-form"
                          action="{{{ URL::to('/profile/'.$user->username.'/ticket') }}}">
                        <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">

                        <div class="row form-row">
                            <div class="col-md-6">
                                <input type="text" placeholder="Subject" class="form-control" id="Subject"
                                       name="Subject" value="{{{ Input::old('Subject') }}}">
                            </div>
                            <div class="col-md-3">
                                <select id="Product_id" name="Product_id" style="width:100%">
                                    <option value="">Loading Products...</option>

                                </select>
                             
                            </div>
                            <div class="col-md-3">
                                <input type="text" placeholder="Purchase ID" class="form-control" id="Purchase_id"
                                       name="Purchase_id">
                            </div>
                        </div>
                        <div class="row form-row">
                            <div class="col-md-12">
                                <textarea class="form-control" rows="10" id="Description" name="Description"
                                          value="{{{ Input::old('Subject') }}}"></textarea>
                            </div>
                        </div>
                        <div class="row form-row h-align-middle">
                            <div class="col-md-12 ">
                                {{ Form::captcha(array('theme' => 'plain')) }}
                            </div>

                        </div>
                        <div class="row form-row">
                            <div class="col-md-12 margin-top-10">
                                <div class="pull-left">
                                    <div class="checkbox checkbox check-success col-md-12">
                                        <label for="chkTerms"> <input type="checkbox" name="terms" value="1" id="chkTerms">
                                            <span class="ripple"></span><span class="check"></span>I Here by agree on the Term and
                                            condition. </label>
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <button class="btn btn-cons" type="button" id="btn-close-ticket">Close
                                    </button>
                                    <button class="btn btn-primary btn-cons" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <h4>Open <span class="semi-bold">Tickets</span></h4>
    <br>

    <div class="row">

            <div class="col-md-12">
                @foreach($tickets as $ticket)
                <div class="box simple no-border">
                    <div class="box-title no-border descriptive clickable">
                        <h4 class="semi-bold">{{ $ticket->Subject }}</h4>


                        <p><span class="text-success bold">Ticket #{{ $ticket->prefix }}{{ $ticket->id }}</span> -
                            Created on {{ $ticket->created_at}}&nbsp;&nbsp;

                            <input id="{{$ticket->id}}" type="number" class="rating" min=1 max=5 step=.5 data-size="xs" data-rtl="false"  >

                            <script type="text/javascript">

                                $("#{{$ticket->id}}").rating();
                                $('#{{$ticket->id}}').rating('update',{{$ticket->Rating}});
                                $("#{{$ticket->id}}").on('rating.change', function(event, value, caption) {

                                    $.ajax({
                                        type: "GET",
                                        url: "{{{ URL::to('/profile/'.$user->username.'/ticket/rating') }}}",
                                        data: {value: value,id:"{{$ticket->id}}"},
                                        cache: false,
                                        success: function (data) {

                                        }
                                    });
                                });
                                </script>
                                <span
                                    class="label label-important">ALERT</span></p>

                        <div class="actions"><a class="view" href="javascript:;"><i class="fa fa-angle-down"></i></a>
                        </div>
                    </div>
                    <div class="box-body  no-border" style="display:none">
                        <div class="post">
                            <div class="user-profile-pic-wrapper">
                                <div class="user-profile-pic-normal"><img width="35" height="35"
                                                                          data-src-retina="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgLTI3IDI0IDEwMCAxMDAiIGhlaWdodD0iMTAwcHgiIGlkPSJtYWxlMyIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSItMjcgMjQgMTAwIDEwMCIgd2lkdGg9IjEwMHB4IiB4bWw6c3BhY2U9InByZXNlcnZlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnNrZXRjaD0iaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoL25zIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+PGc+PGc+PGNpcmNsZSBjeD0iMjMiIGN5PSI3NCIgZmlsbD0iI0Y1RUVFNSIgcj0iNTAiLz48Zz48ZGVmcz48Y2lyY2xlIGN4PSIyMyIgY3k9Ijc0IiBpZD0iU1ZHSURfMV8iIHI9IjUwIi8+PC9kZWZzPjxjbGlwUGF0aCBpZD0iU1ZHSURfMl8iPjx1c2Ugb3ZlcmZsb3c9InZpc2libGUiIHhsaW5rOmhyZWY9IiNTVkdJRF8xXyIvPjwvY2xpcFBhdGg+PHBhdGggY2xpcC1wYXRoPSJ1cmwoI1NWR0lEXzJfKSIgZD0iTTM4LDk5LjlsMjcuOSw3LjdjMy4yLDEuMSw1LjcsMy41LDcuMSw2LjZ2OS44SC0yN3YtOS44ICAgICAgYzEuMy0zLjEsMy45LTUuNSw3LjEtNi42TDgsOTkuOVY4NWgzMFY5OS45eiIgZmlsbD0iI0U2QzE5QyIvPjxnIGNsaXAtcGF0aD0idXJsKCNTVkdJRF8yXykiPjxkZWZzPjxwYXRoIGQ9Ik0zOCw5OS45bDI3LjksNy43YzMuMiwxLjEsNS43LDMuNSw3LjEsNi42djkuOEgtMjd2LTkuOGMxLjMtMy4xLDMuOS01LjUsNy4xLTYuNkw4LDk5LjlWODVoMzBWOTkuOXoiIGlkPSJTVkdJRF8zXyIvPjwvZGVmcz48Y2xpcFBhdGggaWQ9IlNWR0lEXzRfIj48dXNlIG92ZXJmbG93PSJ2aXNpYmxlIiB4bGluazpocmVmPSIjU1ZHSURfM18iLz48L2NsaXBQYXRoPjxwYXRoIGNsaXAtcGF0aD0idXJsKCNTVkdJRF80XykiIGQ9Ik0tMjcsODJINzN2NDJILTI3VjgyeiBNMjMsMTEyYzExLDAsMjAtNi4zLDIwLTE0cy05LTE0LTIwLTE0UzMsOTAuMywzLDk4ICAgICAgIFMxMiwxMTIsMjMsMTEyeiIgZmlsbD0iI0U2QTQyMiIvPjxwYXRoIGNsaXAtcGF0aD0idXJsKCNTVkdJRF80XykiIGQ9Ik0yMywxMDJjLTEuNywwLTMuOS0wLjQtNS40LTEuMWMtMS43LTAuOS04LTYuMS0xMC4yLTguMyAgICAgICBjLTIuOC0zLTQuMi02LjgtNC42LTEzLjNjLTAuNC02LjUtMi4xLTI5LjctMi4xLTM1YzAtNy41LDUuNy0xOS4yLDIyLjEtMTkuMmwwLjEsMGwwLDBsMCwwbDAuMSwwICAgICAgIGMxNi41LDAuMSwyMi4xLDExLjcsMjIuMSwxOS4yYzAsNS4zLTEuNywyOC41LTIuMSwzNWMtMC40LDYuNS0xLjgsMTAuMi00LjYsMTMuM2MtMi4xLDIuMy04LjQsNy40LTEwLjIsOC4zICAgICAgIEMyNi45LDEwMS42LDI0LjcsMTAyLDIzLDEwMkwyMywxMDJ6IiBmaWxsPSIjRDRCMDhDIi8+PHBhdGggY2xpcC1wYXRoPSJ1cmwoI1NWR0lEXzRfKSIgZD0iTTIzLDgyQzEwLjMsODIsMCw4OS40LDAsOTguNVMxMC4zLDExNSwyMywxMTVzMjMtNy40LDIzLTE2LjUgICAgICAgUzM1LjcsODIsMjMsODJ6IE0yMywxMTFjLTEwLjUsMC0xOS02LTE5LTEzLjVTMTIuNSw4NCwyMyw4NHMxOSw2LDE5LDEzLjVTMzMuNSwxMTEsMjMsMTExeiIgZmlsbD0iI0Q5OEMyMSIvPjwvZz48L2c+PHBhdGggZD0iTTIzLDk4Yy0xLjUsMC0zLjUtMC4zLTQuOC0wLjljLTEuNi0wLjctNy4yLTQuNi05LjEtNi4zYy0yLjUtMi4zLTMuOC01LjEtNC4yLTEwUzMsNTguNSwzLDU0LjUgICAgIEMzLDQ4LjgsOC4xLDQwLDIzLDQwbDAsMGwwLDBsMCwwbDAsMEMzNy45LDQwLDQzLDQ4LjgsNDMsNTQuNWMwLDQtMS41LDIxLjUtMS45LDI2LjRzLTEuNiw3LjctNC4yLDEwYy0xLjksMS43LTcuNiw1LjYtOS4xLDYuMyAgICAgQzI2LjUsOTcuNywyNC41LDk4LDIzLDk4TDIzLDk4eiIgZmlsbD0iI0YyQ0VBNSIvPjxwYXRoIGQ9Ik0zMCw4NS41Yy0xLjksMi01LjIsMy04LjEsMi40Yy0yLjctMC42LTQuNy0yLTUuNy00LjNMMzAsODUuNXoiIGZpbGw9IiNBMzcwNUYiLz48cGF0aCBkPSJNMzAsODUuNWMtMS45LDItNS4yLDMtOC4xLDIuNCAgICAgYy0yLjctMC42LTQuNy0yLTUuNy00LjNMMzAsODUuNXoiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0EzNzA1RiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+PGc+PGRlZnM+PHJlY3QgaGVpZ2h0PSI1IiBpZD0iU1ZHSURfNV8iIHdpZHRoPSIzMSIgeD0iNyIgeT0iNjUiLz48L2RlZnM+PGNsaXBQYXRoIGlkPSJTVkdJRF82XyI+PHVzZSBvdmVyZmxvdz0idmlzaWJsZSIgeGxpbms6aHJlZj0iI1NWR0lEXzVfIi8+PC9jbGlwUGF0aD48Y2lyY2xlIGNsaXAtcGF0aD0idXJsKCNTVkdJRF82XykiIGN4PSIzMiIgY3k9IjY5IiBmaWxsPSIjMjkxRjIxIiByPSIyIi8+PGNpcmNsZSBjbGlwLXBhdGg9InVybCgjU1ZHSURfNl8pIiBjeD0iMTQiIGN5PSI2OSIgZmlsbD0iIzI5MUYyMSIgcj0iMiIvPjwvZz48cGF0aCBkPSJNOCw2NmMwLDAsMS4xLTMsNi4xLTNjMy40LDAsNS40LDEuNSw2LjQsMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjQ0M5ODcyIiBzdHJva2Utd2lkdGg9IjIiLz48cGF0aCBkPSJNMzguMSw2NmMwLDAtMS4xLTMtNi4xLTNjLTQuOCwwLTcsMy03LDVjMCwxLjksMCw5LDAsOSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjQkI4NjYwIiBzdHJva2Utd2lkdGg9IjIiLz48cGF0aCBkPSJNNDEuOCw3Mi4yYzAsMCwwLjgtNi4zLDMuNy03LjJjMC40LTEuOCwxLjUtNywxLjUtOS45cy0wLjMtNS43LTEuOS04LjFjLTEuOC0yLjYtNS42LTQuMS03LjYtNC4xICAgICBjLTIuMywxLjQtNy43LDQuNi05LjQsNi41Yy0wLjksMSwwLjQsMS44LDAuNCwxLjhzMS4yLTAuNSwxLjctMC42YzIuNS0wLjcsOC0xLjIsOS43LDEuM0M0Miw1NC45LDQyLDYzLjcsNDIsNjUgICAgIEM0Miw2Ni4yLDQxLjgsNzIuMiw0MS44LDcyLjJ6IiBmaWxsPSIjNDUyMjI4Ii8+PHBhdGggZD0iTTAuNSw2NWMyLjksMSwzLjcsNy4yLDMuNyw3LjJTNCw2Ni4yLDQsNjVjMC0xLjYsMC4yLTkuMSwzLjQtMTIuN2MzLjYtNCw4LjQtNS4zLDExLjEtMy41ICAgICBjMS40LDAuOSw2LjEsNS41LDExLjEsMS43YzMtMi4zLDguNS03LjUsOC41LTcuNXMtMi45LTguOS0xNi4xLTcuOWMtNS42LDAuNS0xMS44LTAuOS0xMS44LTAuOXMtMC4xLDIuNSwwLjksMy44ICAgICBDMi44LDQwLjQsMC4xLDQ2LjQtMC43LDUxYy0wLjIsMC45LTAuMywxLjgtMC4zLDIuN2MwLDAuNSwwLDEsMCwxLjRDLTEsNTgsMC4xLDYzLjEsMC41LDY1eiIgZmlsbD0iIzZCMzYzRSIvPjwvZz48L2c+PC9zdmc+"
                                                                          data-src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgLTI3IDI0IDEwMCAxMDAiIGhlaWdodD0iMTAwcHgiIGlkPSJtYWxlMyIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSItMjcgMjQgMTAwIDEwMCIgd2lkdGg9IjEwMHB4IiB4bWw6c3BhY2U9InByZXNlcnZlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnNrZXRjaD0iaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoL25zIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+PGc+PGc+PGNpcmNsZSBjeD0iMjMiIGN5PSI3NCIgZmlsbD0iI0Y1RUVFNSIgcj0iNTAiLz48Zz48ZGVmcz48Y2lyY2xlIGN4PSIyMyIgY3k9Ijc0IiBpZD0iU1ZHSURfMV8iIHI9IjUwIi8+PC9kZWZzPjxjbGlwUGF0aCBpZD0iU1ZHSURfMl8iPjx1c2Ugb3ZlcmZsb3c9InZpc2libGUiIHhsaW5rOmhyZWY9IiNTVkdJRF8xXyIvPjwvY2xpcFBhdGg+PHBhdGggY2xpcC1wYXRoPSJ1cmwoI1NWR0lEXzJfKSIgZD0iTTM4LDk5LjlsMjcuOSw3LjdjMy4yLDEuMSw1LjcsMy41LDcuMSw2LjZ2OS44SC0yN3YtOS44ICAgICAgYzEuMy0zLjEsMy45LTUuNSw3LjEtNi42TDgsOTkuOVY4NWgzMFY5OS45eiIgZmlsbD0iI0U2QzE5QyIvPjxnIGNsaXAtcGF0aD0idXJsKCNTVkdJRF8yXykiPjxkZWZzPjxwYXRoIGQ9Ik0zOCw5OS45bDI3LjksNy43YzMuMiwxLjEsNS43LDMuNSw3LjEsNi42djkuOEgtMjd2LTkuOGMxLjMtMy4xLDMuOS01LjUsNy4xLTYuNkw4LDk5LjlWODVoMzBWOTkuOXoiIGlkPSJTVkdJRF8zXyIvPjwvZGVmcz48Y2xpcFBhdGggaWQ9IlNWR0lEXzRfIj48dXNlIG92ZXJmbG93PSJ2aXNpYmxlIiB4bGluazpocmVmPSIjU1ZHSURfM18iLz48L2NsaXBQYXRoPjxwYXRoIGNsaXAtcGF0aD0idXJsKCNTVkdJRF80XykiIGQ9Ik0tMjcsODJINzN2NDJILTI3VjgyeiBNMjMsMTEyYzExLDAsMjAtNi4zLDIwLTE0cy05LTE0LTIwLTE0UzMsOTAuMywzLDk4ICAgICAgIFMxMiwxMTIsMjMsMTEyeiIgZmlsbD0iI0U2QTQyMiIvPjxwYXRoIGNsaXAtcGF0aD0idXJsKCNTVkdJRF80XykiIGQ9Ik0yMywxMDJjLTEuNywwLTMuOS0wLjQtNS40LTEuMWMtMS43LTAuOS04LTYuMS0xMC4yLTguMyAgICAgICBjLTIuOC0zLTQuMi02LjgtNC42LTEzLjNjLTAuNC02LjUtMi4xLTI5LjctMi4xLTM1YzAtNy41LDUuNy0xOS4yLDIyLjEtMTkuMmwwLjEsMGwwLDBsMCwwbDAuMSwwICAgICAgIGMxNi41LDAuMSwyMi4xLDExLjcsMjIuMSwxOS4yYzAsNS4zLTEuNywyOC41LTIuMSwzNWMtMC40LDYuNS0xLjgsMTAuMi00LjYsMTMuM2MtMi4xLDIuMy04LjQsNy40LTEwLjIsOC4zICAgICAgIEMyNi45LDEwMS42LDI0LjcsMTAyLDIzLDEwMkwyMywxMDJ6IiBmaWxsPSIjRDRCMDhDIi8+PHBhdGggY2xpcC1wYXRoPSJ1cmwoI1NWR0lEXzRfKSIgZD0iTTIzLDgyQzEwLjMsODIsMCw4OS40LDAsOTguNVMxMC4zLDExNSwyMywxMTVzMjMtNy40LDIzLTE2LjUgICAgICAgUzM1LjcsODIsMjMsODJ6IE0yMywxMTFjLTEwLjUsMC0xOS02LTE5LTEzLjVTMTIuNSw4NCwyMyw4NHMxOSw2LDE5LDEzLjVTMzMuNSwxMTEsMjMsMTExeiIgZmlsbD0iI0Q5OEMyMSIvPjwvZz48L2c+PHBhdGggZD0iTTIzLDk4Yy0xLjUsMC0zLjUtMC4zLTQuOC0wLjljLTEuNi0wLjctNy4yLTQuNi05LjEtNi4zYy0yLjUtMi4zLTMuOC01LjEtNC4yLTEwUzMsNTguNSwzLDU0LjUgICAgIEMzLDQ4LjgsOC4xLDQwLDIzLDQwbDAsMGwwLDBsMCwwbDAsMEMzNy45LDQwLDQzLDQ4LjgsNDMsNTQuNWMwLDQtMS41LDIxLjUtMS45LDI2LjRzLTEuNiw3LjctNC4yLDEwYy0xLjksMS43LTcuNiw1LjYtOS4xLDYuMyAgICAgQzI2LjUsOTcuNywyNC41LDk4LDIzLDk4TDIzLDk4eiIgZmlsbD0iI0YyQ0VBNSIvPjxwYXRoIGQ9Ik0zMCw4NS41Yy0xLjksMi01LjIsMy04LjEsMi40Yy0yLjctMC42LTQuNy0yLTUuNy00LjNMMzAsODUuNXoiIGZpbGw9IiNBMzcwNUYiLz48cGF0aCBkPSJNMzAsODUuNWMtMS45LDItNS4yLDMtOC4xLDIuNCAgICAgYy0yLjctMC42LTQuNy0yLTUuNy00LjNMMzAsODUuNXoiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0EzNzA1RiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+PGc+PGRlZnM+PHJlY3QgaGVpZ2h0PSI1IiBpZD0iU1ZHSURfNV8iIHdpZHRoPSIzMSIgeD0iNyIgeT0iNjUiLz48L2RlZnM+PGNsaXBQYXRoIGlkPSJTVkdJRF82XyI+PHVzZSBvdmVyZmxvdz0idmlzaWJsZSIgeGxpbms6aHJlZj0iI1NWR0lEXzVfIi8+PC9jbGlwUGF0aD48Y2lyY2xlIGNsaXAtcGF0aD0idXJsKCNTVkdJRF82XykiIGN4PSIzMiIgY3k9IjY5IiBmaWxsPSIjMjkxRjIxIiByPSIyIi8+PGNpcmNsZSBjbGlwLXBhdGg9InVybCgjU1ZHSURfNl8pIiBjeD0iMTQiIGN5PSI2OSIgZmlsbD0iIzI5MUYyMSIgcj0iMiIvPjwvZz48cGF0aCBkPSJNOCw2NmMwLDAsMS4xLTMsNi4xLTNjMy40LDAsNS40LDEuNSw2LjQsMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjQ0M5ODcyIiBzdHJva2Utd2lkdGg9IjIiLz48cGF0aCBkPSJNMzguMSw2NmMwLDAtMS4xLTMtNi4xLTNjLTQuOCwwLTcsMy03LDVjMCwxLjksMCw5LDAsOSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjQkI4NjYwIiBzdHJva2Utd2lkdGg9IjIiLz48cGF0aCBkPSJNNDEuOCw3Mi4yYzAsMCwwLjgtNi4zLDMuNy03LjJjMC40LTEuOCwxLjUtNywxLjUtOS45cy0wLjMtNS43LTEuOS04LjFjLTEuOC0yLjYtNS42LTQuMS03LjYtNC4xICAgICBjLTIuMywxLjQtNy43LDQuNi05LjQsNi41Yy0wLjksMSwwLjQsMS44LDAuNCwxLjhzMS4yLTAuNSwxLjctMC42YzIuNS0wLjcsOC0xLjIsOS43LDEuM0M0Miw1NC45LDQyLDYzLjcsNDIsNjUgICAgIEM0Miw2Ni4yLDQxLjgsNzIuMiw0MS44LDcyLjJ6IiBmaWxsPSIjNDUyMjI4Ii8+PHBhdGggZD0iTTAuNSw2NWMyLjksMSwzLjcsNy4yLDMuNyw3LjJTNCw2Ni4yLDQsNjVjMC0xLjYsMC4yLTkuMSwzLjQtMTIuN2MzLjYtNCw4LjQtNS4zLDExLjEtMy41ICAgICBjMS40LDAuOSw2LjEsNS41LDExLjEsMS43YzMtMi4zLDguNS03LjUsOC41LTcuNXMtMi45LTguOS0xNi4xLTcuOWMtNS42LDAuNS0xMS44LTAuOS0xMS44LTAuOXMtMC4xLDIuNSwwLjksMy44ICAgICBDMi44LDQwLjQsMC4xLDQ2LjQtMC43LDUxYy0wLjIsMC45LTAuMywxLjgtMC4zLDIuN2MwLDAuNSwwLDEsMCwxLjRDLTEsNTgsMC4xLDYzLjEsMC41LDY1eiIgZmlsbD0iIzZCMzYzRSIvPjwvZz48L2c+PC9zdmc+"
                                                                          src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgLTI3IDI0IDEwMCAxMDAiIGhlaWdodD0iMTAwcHgiIGlkPSJtYWxlMyIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSItMjcgMjQgMTAwIDEwMCIgd2lkdGg9IjEwMHB4IiB4bWw6c3BhY2U9InByZXNlcnZlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnNrZXRjaD0iaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoL25zIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+PGc+PGc+PGNpcmNsZSBjeD0iMjMiIGN5PSI3NCIgZmlsbD0iI0Y1RUVFNSIgcj0iNTAiLz48Zz48ZGVmcz48Y2lyY2xlIGN4PSIyMyIgY3k9Ijc0IiBpZD0iU1ZHSURfMV8iIHI9IjUwIi8+PC9kZWZzPjxjbGlwUGF0aCBpZD0iU1ZHSURfMl8iPjx1c2Ugb3ZlcmZsb3c9InZpc2libGUiIHhsaW5rOmhyZWY9IiNTVkdJRF8xXyIvPjwvY2xpcFBhdGg+PHBhdGggY2xpcC1wYXRoPSJ1cmwoI1NWR0lEXzJfKSIgZD0iTTM4LDk5LjlsMjcuOSw3LjdjMy4yLDEuMSw1LjcsMy41LDcuMSw2LjZ2OS44SC0yN3YtOS44ICAgICAgYzEuMy0zLjEsMy45LTUuNSw3LjEtNi42TDgsOTkuOVY4NWgzMFY5OS45eiIgZmlsbD0iI0U2QzE5QyIvPjxnIGNsaXAtcGF0aD0idXJsKCNTVkdJRF8yXykiPjxkZWZzPjxwYXRoIGQ9Ik0zOCw5OS45bDI3LjksNy43YzMuMiwxLjEsNS43LDMuNSw3LjEsNi42djkuOEgtMjd2LTkuOGMxLjMtMy4xLDMuOS01LjUsNy4xLTYuNkw4LDk5LjlWODVoMzBWOTkuOXoiIGlkPSJTVkdJRF8zXyIvPjwvZGVmcz48Y2xpcFBhdGggaWQ9IlNWR0lEXzRfIj48dXNlIG92ZXJmbG93PSJ2aXNpYmxlIiB4bGluazpocmVmPSIjU1ZHSURfM18iLz48L2NsaXBQYXRoPjxwYXRoIGNsaXAtcGF0aD0idXJsKCNTVkdJRF80XykiIGQ9Ik0tMjcsODJINzN2NDJILTI3VjgyeiBNMjMsMTEyYzExLDAsMjAtNi4zLDIwLTE0cy05LTE0LTIwLTE0UzMsOTAuMywzLDk4ICAgICAgIFMxMiwxMTIsMjMsMTEyeiIgZmlsbD0iI0U2QTQyMiIvPjxwYXRoIGNsaXAtcGF0aD0idXJsKCNTVkdJRF80XykiIGQ9Ik0yMywxMDJjLTEuNywwLTMuOS0wLjQtNS40LTEuMWMtMS43LTAuOS04LTYuMS0xMC4yLTguMyAgICAgICBjLTIuOC0zLTQuMi02LjgtNC42LTEzLjNjLTAuNC02LjUtMi4xLTI5LjctMi4xLTM1YzAtNy41LDUuNy0xOS4yLDIyLjEtMTkuMmwwLjEsMGwwLDBsMCwwbDAuMSwwICAgICAgIGMxNi41LDAuMSwyMi4xLDExLjcsMjIuMSwxOS4yYzAsNS4zLTEuNywyOC41LTIuMSwzNWMtMC40LDYuNS0xLjgsMTAuMi00LjYsMTMuM2MtMi4xLDIuMy04LjQsNy40LTEwLjIsOC4zICAgICAgIEMyNi45LDEwMS42LDI0LjcsMTAyLDIzLDEwMkwyMywxMDJ6IiBmaWxsPSIjRDRCMDhDIi8+PHBhdGggY2xpcC1wYXRoPSJ1cmwoI1NWR0lEXzRfKSIgZD0iTTIzLDgyQzEwLjMsODIsMCw4OS40LDAsOTguNVMxMC4zLDExNSwyMywxMTVzMjMtNy40LDIzLTE2LjUgICAgICAgUzM1LjcsODIsMjMsODJ6IE0yMywxMTFjLTEwLjUsMC0xOS02LTE5LTEzLjVTMTIuNSw4NCwyMyw4NHMxOSw2LDE5LDEzLjVTMzMuNSwxMTEsMjMsMTExeiIgZmlsbD0iI0Q5OEMyMSIvPjwvZz48L2c+PHBhdGggZD0iTTIzLDk4Yy0xLjUsMC0zLjUtMC4zLTQuOC0wLjljLTEuNi0wLjctNy4yLTQuNi05LjEtNi4zYy0yLjUtMi4zLTMuOC01LjEtNC4yLTEwUzMsNTguNSwzLDU0LjUgICAgIEMzLDQ4LjgsOC4xLDQwLDIzLDQwbDAsMGwwLDBsMCwwbDAsMEMzNy45LDQwLDQzLDQ4LjgsNDMsNTQuNWMwLDQtMS41LDIxLjUtMS45LDI2LjRzLTEuNiw3LjctNC4yLDEwYy0xLjksMS43LTcuNiw1LjYtOS4xLDYuMyAgICAgQzI2LjUsOTcuNywyNC41LDk4LDIzLDk4TDIzLDk4eiIgZmlsbD0iI0YyQ0VBNSIvPjxwYXRoIGQ9Ik0zMCw4NS41Yy0xLjksMi01LjIsMy04LjEsMi40Yy0yLjctMC42LTQuNy0yLTUuNy00LjNMMzAsODUuNXoiIGZpbGw9IiNBMzcwNUYiLz48cGF0aCBkPSJNMzAsODUuNWMtMS45LDItNS4yLDMtOC4xLDIuNCAgICAgYy0yLjctMC42LTQuNy0yLTUuNy00LjNMMzAsODUuNXoiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0EzNzA1RiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+PGc+PGRlZnM+PHJlY3QgaGVpZ2h0PSI1IiBpZD0iU1ZHSURfNV8iIHdpZHRoPSIzMSIgeD0iNyIgeT0iNjUiLz48L2RlZnM+PGNsaXBQYXRoIGlkPSJTVkdJRF82XyI+PHVzZSBvdmVyZmxvdz0idmlzaWJsZSIgeGxpbms6aHJlZj0iI1NWR0lEXzVfIi8+PC9jbGlwUGF0aD48Y2lyY2xlIGNsaXAtcGF0aD0idXJsKCNTVkdJRF82XykiIGN4PSIzMiIgY3k9IjY5IiBmaWxsPSIjMjkxRjIxIiByPSIyIi8+PGNpcmNsZSBjbGlwLXBhdGg9InVybCgjU1ZHSURfNl8pIiBjeD0iMTQiIGN5PSI2OSIgZmlsbD0iIzI5MUYyMSIgcj0iMiIvPjwvZz48cGF0aCBkPSJNOCw2NmMwLDAsMS4xLTMsNi4xLTNjMy40LDAsNS40LDEuNSw2LjQsMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjQ0M5ODcyIiBzdHJva2Utd2lkdGg9IjIiLz48cGF0aCBkPSJNMzguMSw2NmMwLDAtMS4xLTMtNi4xLTNjLTQuOCwwLTcsMy03LDVjMCwxLjksMCw5LDAsOSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjQkI4NjYwIiBzdHJva2Utd2lkdGg9IjIiLz48cGF0aCBkPSJNNDEuOCw3Mi4yYzAsMCwwLjgtNi4zLDMuNy03LjJjMC40LTEuOCwxLjUtNywxLjUtOS45cy0wLjMtNS43LTEuOS04LjFjLTEuOC0yLjYtNS42LTQuMS03LjYtNC4xICAgICBjLTIuMywxLjQtNy43LDQuNi05LjQsNi41Yy0wLjksMSwwLjQsMS44LDAuNCwxLjhzMS4yLTAuNSwxLjctMC42YzIuNS0wLjcsOC0xLjIsOS43LDEuM0M0Miw1NC45LDQyLDYzLjcsNDIsNjUgICAgIEM0Miw2Ni4yLDQxLjgsNzIuMiw0MS44LDcyLjJ6IiBmaWxsPSIjNDUyMjI4Ii8+PHBhdGggZD0iTTAuNSw2NWMyLjksMSwzLjcsNy4yLDMuNyw3LjJTNCw2Ni4yLDQsNjVjMC0xLjYsMC4yLTkuMSwzLjQtMTIuN2MzLjYtNCw4LjQtNS4zLDExLjEtMy41ICAgICBjMS40LDAuOSw2LjEsNS41LDExLjEsMS43YzMtMi4zLDguNS03LjUsOC41LTcuNXMtMi45LTguOS0xNi4xLTcuOWMtNS42LDAuNS0xMS44LTAuOS0xMS44LTAuOXMtMC4xLDIuNSwwLjksMy44ICAgICBDMi44LDQwLjQsMC4xLDQ2LjQtMC43LDUxYy0wLjIsMC45LTAuMywxLjgtMC4zLDIuN2MwLDAuNSwwLDEsMCwxLjRDLTEsNTgsMC4xLDYzLjEsMC41LDY1eiIgZmlsbD0iIzZCMzYzRSIvPjwvZz48L2c+PC9zdmc+"
                                                                          alt=""></div>
                            </div>
                            <div class="info-wrapper">
                                <div class="info"> {{ $ticket->Description }} </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <br>
                        <hr>
                        <div class="form-actions">
                            <div class="post col-md-12">
                                <div class="user-profile-pic-wrapper">
                                    <div class="user-profile-pic-normal"><img width="35" height="35"
                                                                              data-src-retina="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgLTI3IDI0IDEwMCAxMDAiIGhlaWdodD0iMTAwcHgiIGlkPSJtYWxlMyIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSItMjcgMjQgMTAwIDEwMCIgd2lkdGg9IjEwMHB4IiB4bWw6c3BhY2U9InByZXNlcnZlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnNrZXRjaD0iaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoL25zIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+PGc+PGc+PGNpcmNsZSBjeD0iMjMiIGN5PSI3NCIgZmlsbD0iI0Y1RUVFNSIgcj0iNTAiLz48Zz48ZGVmcz48Y2lyY2xlIGN4PSIyMyIgY3k9Ijc0IiBpZD0iU1ZHSURfMV8iIHI9IjUwIi8+PC9kZWZzPjxjbGlwUGF0aCBpZD0iU1ZHSURfMl8iPjx1c2Ugb3ZlcmZsb3c9InZpc2libGUiIHhsaW5rOmhyZWY9IiNTVkdJRF8xXyIvPjwvY2xpcFBhdGg+PHBhdGggY2xpcC1wYXRoPSJ1cmwoI1NWR0lEXzJfKSIgZD0iTTM4LDk5LjlsMjcuOSw3LjdjMy4yLDEuMSw1LjcsMy41LDcuMSw2LjZ2OS44SC0yN3YtOS44ICAgICAgYzEuMy0zLjEsMy45LTUuNSw3LjEtNi42TDgsOTkuOVY4NWgzMFY5OS45eiIgZmlsbD0iI0U2QzE5QyIvPjxnIGNsaXAtcGF0aD0idXJsKCNTVkdJRF8yXykiPjxkZWZzPjxwYXRoIGQ9Ik0zOCw5OS45bDI3LjksNy43YzMuMiwxLjEsNS43LDMuNSw3LjEsNi42djkuOEgtMjd2LTkuOGMxLjMtMy4xLDMuOS01LjUsNy4xLTYuNkw4LDk5LjlWODVoMzBWOTkuOXoiIGlkPSJTVkdJRF8zXyIvPjwvZGVmcz48Y2xpcFBhdGggaWQ9IlNWR0lEXzRfIj48dXNlIG92ZXJmbG93PSJ2aXNpYmxlIiB4bGluazpocmVmPSIjU1ZHSURfM18iLz48L2NsaXBQYXRoPjxwYXRoIGNsaXAtcGF0aD0idXJsKCNTVkdJRF80XykiIGQ9Ik0tMjcsODJINzN2NDJILTI3VjgyeiBNMjMsMTEyYzExLDAsMjAtNi4zLDIwLTE0cy05LTE0LTIwLTE0UzMsOTAuMywzLDk4ICAgICAgIFMxMiwxMTIsMjMsMTEyeiIgZmlsbD0iI0U2QTQyMiIvPjxwYXRoIGNsaXAtcGF0aD0idXJsKCNTVkdJRF80XykiIGQ9Ik0yMywxMDJjLTEuNywwLTMuOS0wLjQtNS40LTEuMWMtMS43LTAuOS04LTYuMS0xMC4yLTguMyAgICAgICBjLTIuOC0zLTQuMi02LjgtNC42LTEzLjNjLTAuNC02LjUtMi4xLTI5LjctMi4xLTM1YzAtNy41LDUuNy0xOS4yLDIyLjEtMTkuMmwwLjEsMGwwLDBsMCwwbDAuMSwwICAgICAgIGMxNi41LDAuMSwyMi4xLDExLjcsMjIuMSwxOS4yYzAsNS4zLTEuNywyOC41LTIuMSwzNWMtMC40LDYuNS0xLjgsMTAuMi00LjYsMTMuM2MtMi4xLDIuMy04LjQsNy40LTEwLjIsOC4zICAgICAgIEMyNi45LDEwMS42LDI0LjcsMTAyLDIzLDEwMkwyMywxMDJ6IiBmaWxsPSIjRDRCMDhDIi8+PHBhdGggY2xpcC1wYXRoPSJ1cmwoI1NWR0lEXzRfKSIgZD0iTTIzLDgyQzEwLjMsODIsMCw4OS40LDAsOTguNVMxMC4zLDExNSwyMywxMTVzMjMtNy40LDIzLTE2LjUgICAgICAgUzM1LjcsODIsMjMsODJ6IE0yMywxMTFjLTEwLjUsMC0xOS02LTE5LTEzLjVTMTIuNSw4NCwyMyw4NHMxOSw2LDE5LDEzLjVTMzMuNSwxMTEsMjMsMTExeiIgZmlsbD0iI0Q5OEMyMSIvPjwvZz48L2c+PHBhdGggZD0iTTIzLDk4Yy0xLjUsMC0zLjUtMC4zLTQuOC0wLjljLTEuNi0wLjctNy4yLTQuNi05LjEtNi4zYy0yLjUtMi4zLTMuOC01LjEtNC4yLTEwUzMsNTguNSwzLDU0LjUgICAgIEMzLDQ4LjgsOC4xLDQwLDIzLDQwbDAsMGwwLDBsMCwwbDAsMEMzNy45LDQwLDQzLDQ4LjgsNDMsNTQuNWMwLDQtMS41LDIxLjUtMS45LDI2LjRzLTEuNiw3LjctNC4yLDEwYy0xLjksMS43LTcuNiw1LjYtOS4xLDYuMyAgICAgQzI2LjUsOTcuNywyNC41LDk4LDIzLDk4TDIzLDk4eiIgZmlsbD0iI0YyQ0VBNSIvPjxwYXRoIGQ9Ik0zMCw4NS41Yy0xLjksMi01LjIsMy04LjEsMi40Yy0yLjctMC42LTQuNy0yLTUuNy00LjNMMzAsODUuNXoiIGZpbGw9IiNBMzcwNUYiLz48cGF0aCBkPSJNMzAsODUuNWMtMS45LDItNS4yLDMtOC4xLDIuNCAgICAgYy0yLjctMC42LTQuNy0yLTUuNy00LjNMMzAsODUuNXoiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0EzNzA1RiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+PGc+PGRlZnM+PHJlY3QgaGVpZ2h0PSI1IiBpZD0iU1ZHSURfNV8iIHdpZHRoPSIzMSIgeD0iNyIgeT0iNjUiLz48L2RlZnM+PGNsaXBQYXRoIGlkPSJTVkdJRF82XyI+PHVzZSBvdmVyZmxvdz0idmlzaWJsZSIgeGxpbms6aHJlZj0iI1NWR0lEXzVfIi8+PC9jbGlwUGF0aD48Y2lyY2xlIGNsaXAtcGF0aD0idXJsKCNTVkdJRF82XykiIGN4PSIzMiIgY3k9IjY5IiBmaWxsPSIjMjkxRjIxIiByPSIyIi8+PGNpcmNsZSBjbGlwLXBhdGg9InVybCgjU1ZHSURfNl8pIiBjeD0iMTQiIGN5PSI2OSIgZmlsbD0iIzI5MUYyMSIgcj0iMiIvPjwvZz48cGF0aCBkPSJNOCw2NmMwLDAsMS4xLTMsNi4xLTNjMy40LDAsNS40LDEuNSw2LjQsMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjQ0M5ODcyIiBzdHJva2Utd2lkdGg9IjIiLz48cGF0aCBkPSJNMzguMSw2NmMwLDAtMS4xLTMtNi4xLTNjLTQuOCwwLTcsMy03LDVjMCwxLjksMCw5LDAsOSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjQkI4NjYwIiBzdHJva2Utd2lkdGg9IjIiLz48cGF0aCBkPSJNNDEuOCw3Mi4yYzAsMCwwLjgtNi4zLDMuNy03LjJjMC40LTEuOCwxLjUtNywxLjUtOS45cy0wLjMtNS43LTEuOS04LjFjLTEuOC0yLjYtNS42LTQuMS03LjYtNC4xICAgICBjLTIuMywxLjQtNy43LDQuNi05LjQsNi41Yy0wLjksMSwwLjQsMS44LDAuNCwxLjhzMS4yLTAuNSwxLjctMC42YzIuNS0wLjcsOC0xLjIsOS43LDEuM0M0Miw1NC45LDQyLDYzLjcsNDIsNjUgICAgIEM0Miw2Ni4yLDQxLjgsNzIuMiw0MS44LDcyLjJ6IiBmaWxsPSIjNDUyMjI4Ii8+PHBhdGggZD0iTTAuNSw2NWMyLjksMSwzLjcsNy4yLDMuNyw3LjJTNCw2Ni4yLDQsNjVjMC0xLjYsMC4yLTkuMSwzLjQtMTIuN2MzLjYtNCw4LjQtNS4zLDExLjEtMy41ICAgICBjMS40LDAuOSw2LjEsNS41LDExLjEsMS43YzMtMi4zLDguNS03LjUsOC41LTcuNXMtMi45LTguOS0xNi4xLTcuOWMtNS42LDAuNS0xMS44LTAuOS0xMS44LTAuOXMtMC4xLDIuNSwwLjksMy44ICAgICBDMi44LDQwLjQsMC4xLDQ2LjQtMC43LDUxYy0wLjIsMC45LTAuMywxLjgtMC4zLDIuN2MwLDAuNSwwLDEsMCwxLjRDLTEsNTgsMC4xLDYzLjEsMC41LDY1eiIgZmlsbD0iIzZCMzYzRSIvPjwvZz48L2c+PC9zdmc+"
                                                                              data-src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgLTI3IDI0IDEwMCAxMDAiIGhlaWdodD0iMTAwcHgiIGlkPSJtYWxlMyIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSItMjcgMjQgMTAwIDEwMCIgd2lkdGg9IjEwMHB4IiB4bWw6c3BhY2U9InByZXNlcnZlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnNrZXRjaD0iaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoL25zIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+PGc+PGc+PGNpcmNsZSBjeD0iMjMiIGN5PSI3NCIgZmlsbD0iI0Y1RUVFNSIgcj0iNTAiLz48Zz48ZGVmcz48Y2lyY2xlIGN4PSIyMyIgY3k9Ijc0IiBpZD0iU1ZHSURfMV8iIHI9IjUwIi8+PC9kZWZzPjxjbGlwUGF0aCBpZD0iU1ZHSURfMl8iPjx1c2Ugb3ZlcmZsb3c9InZpc2libGUiIHhsaW5rOmhyZWY9IiNTVkdJRF8xXyIvPjwvY2xpcFBhdGg+PHBhdGggY2xpcC1wYXRoPSJ1cmwoI1NWR0lEXzJfKSIgZD0iTTM4LDk5LjlsMjcuOSw3LjdjMy4yLDEuMSw1LjcsMy41LDcuMSw2LjZ2OS44SC0yN3YtOS44ICAgICAgYzEuMy0zLjEsMy45LTUuNSw3LjEtNi42TDgsOTkuOVY4NWgzMFY5OS45eiIgZmlsbD0iI0U2QzE5QyIvPjxnIGNsaXAtcGF0aD0idXJsKCNTVkdJRF8yXykiPjxkZWZzPjxwYXRoIGQ9Ik0zOCw5OS45bDI3LjksNy43YzMuMiwxLjEsNS43LDMuNSw3LjEsNi42djkuOEgtMjd2LTkuOGMxLjMtMy4xLDMuOS01LjUsNy4xLTYuNkw4LDk5LjlWODVoMzBWOTkuOXoiIGlkPSJTVkdJRF8zXyIvPjwvZGVmcz48Y2xpcFBhdGggaWQ9IlNWR0lEXzRfIj48dXNlIG92ZXJmbG93PSJ2aXNpYmxlIiB4bGluazpocmVmPSIjU1ZHSURfM18iLz48L2NsaXBQYXRoPjxwYXRoIGNsaXAtcGF0aD0idXJsKCNTVkdJRF80XykiIGQ9Ik0tMjcsODJINzN2NDJILTI3VjgyeiBNMjMsMTEyYzExLDAsMjAtNi4zLDIwLTE0cy05LTE0LTIwLTE0UzMsOTAuMywzLDk4ICAgICAgIFMxMiwxMTIsMjMsMTEyeiIgZmlsbD0iI0U2QTQyMiIvPjxwYXRoIGNsaXAtcGF0aD0idXJsKCNTVkdJRF80XykiIGQ9Ik0yMywxMDJjLTEuNywwLTMuOS0wLjQtNS40LTEuMWMtMS43LTAuOS04LTYuMS0xMC4yLTguMyAgICAgICBjLTIuOC0zLTQuMi02LjgtNC42LTEzLjNjLTAuNC02LjUtMi4xLTI5LjctMi4xLTM1YzAtNy41LDUuNy0xOS4yLDIyLjEtMTkuMmwwLjEsMGwwLDBsMCwwbDAuMSwwICAgICAgIGMxNi41LDAuMSwyMi4xLDExLjcsMjIuMSwxOS4yYzAsNS4zLTEuNywyOC41LTIuMSwzNWMtMC40LDYuNS0xLjgsMTAuMi00LjYsMTMuM2MtMi4xLDIuMy04LjQsNy40LTEwLjIsOC4zICAgICAgIEMyNi45LDEwMS42LDI0LjcsMTAyLDIzLDEwMkwyMywxMDJ6IiBmaWxsPSIjRDRCMDhDIi8+PHBhdGggY2xpcC1wYXRoPSJ1cmwoI1NWR0lEXzRfKSIgZD0iTTIzLDgyQzEwLjMsODIsMCw4OS40LDAsOTguNVMxMC4zLDExNSwyMywxMTVzMjMtNy40LDIzLTE2LjUgICAgICAgUzM1LjcsODIsMjMsODJ6IE0yMywxMTFjLTEwLjUsMC0xOS02LTE5LTEzLjVTMTIuNSw4NCwyMyw4NHMxOSw2LDE5LDEzLjVTMzMuNSwxMTEsMjMsMTExeiIgZmlsbD0iI0Q5OEMyMSIvPjwvZz48L2c+PHBhdGggZD0iTTIzLDk4Yy0xLjUsMC0zLjUtMC4zLTQuOC0wLjljLTEuNi0wLjctNy4yLTQuNi05LjEtNi4zYy0yLjUtMi4zLTMuOC01LjEtNC4yLTEwUzMsNTguNSwzLDU0LjUgICAgIEMzLDQ4LjgsOC4xLDQwLDIzLDQwbDAsMGwwLDBsMCwwbDAsMEMzNy45LDQwLDQzLDQ4LjgsNDMsNTQuNWMwLDQtMS41LDIxLjUtMS45LDI2LjRzLTEuNiw3LjctNC4yLDEwYy0xLjksMS43LTcuNiw1LjYtOS4xLDYuMyAgICAgQzI2LjUsOTcuNywyNC41LDk4LDIzLDk4TDIzLDk4eiIgZmlsbD0iI0YyQ0VBNSIvPjxwYXRoIGQ9Ik0zMCw4NS41Yy0xLjksMi01LjIsMy04LjEsMi40Yy0yLjctMC42LTQuNy0yLTUuNy00LjNMMzAsODUuNXoiIGZpbGw9IiNBMzcwNUYiLz48cGF0aCBkPSJNMzAsODUuNWMtMS45LDItNS4yLDMtOC4xLDIuNCAgICAgYy0yLjctMC42LTQuNy0yLTUuNy00LjNMMzAsODUuNXoiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0EzNzA1RiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+PGc+PGRlZnM+PHJlY3QgaGVpZ2h0PSI1IiBpZD0iU1ZHSURfNV8iIHdpZHRoPSIzMSIgeD0iNyIgeT0iNjUiLz48L2RlZnM+PGNsaXBQYXRoIGlkPSJTVkdJRF82XyI+PHVzZSBvdmVyZmxvdz0idmlzaWJsZSIgeGxpbms6aHJlZj0iI1NWR0lEXzVfIi8+PC9jbGlwUGF0aD48Y2lyY2xlIGNsaXAtcGF0aD0idXJsKCNTVkdJRF82XykiIGN4PSIzMiIgY3k9IjY5IiBmaWxsPSIjMjkxRjIxIiByPSIyIi8+PGNpcmNsZSBjbGlwLXBhdGg9InVybCgjU1ZHSURfNl8pIiBjeD0iMTQiIGN5PSI2OSIgZmlsbD0iIzI5MUYyMSIgcj0iMiIvPjwvZz48cGF0aCBkPSJNOCw2NmMwLDAsMS4xLTMsNi4xLTNjMy40LDAsNS40LDEuNSw2LjQsMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjQ0M5ODcyIiBzdHJva2Utd2lkdGg9IjIiLz48cGF0aCBkPSJNMzguMSw2NmMwLDAtMS4xLTMtNi4xLTNjLTQuOCwwLTcsMy03LDVjMCwxLjksMCw5LDAsOSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjQkI4NjYwIiBzdHJva2Utd2lkdGg9IjIiLz48cGF0aCBkPSJNNDEuOCw3Mi4yYzAsMCwwLjgtNi4zLDMuNy03LjJjMC40LTEuOCwxLjUtNywxLjUtOS45cy0wLjMtNS43LTEuOS04LjFjLTEuOC0yLjYtNS42LTQuMS03LjYtNC4xICAgICBjLTIuMywxLjQtNy43LDQuNi05LjQsNi41Yy0wLjksMSwwLjQsMS44LDAuNCwxLjhzMS4yLTAuNSwxLjctMC42YzIuNS0wLjcsOC0xLjIsOS43LDEuM0M0Miw1NC45LDQyLDYzLjcsNDIsNjUgICAgIEM0Miw2Ni4yLDQxLjgsNzIuMiw0MS44LDcyLjJ6IiBmaWxsPSIjNDUyMjI4Ii8+PHBhdGggZD0iTTAuNSw2NWMyLjksMSwzLjcsNy4yLDMuNyw3LjJTNCw2Ni4yLDQsNjVjMC0xLjYsMC4yLTkuMSwzLjQtMTIuN2MzLjYtNCw4LjQtNS4zLDExLjEtMy41ICAgICBjMS40LDAuOSw2LjEsNS41LDExLjEsMS43YzMtMi4zLDguNS03LjUsOC41LTcuNXMtMi45LTguOS0xNi4xLTcuOWMtNS42LDAuNS0xMS44LTAuOS0xMS44LTAuOXMtMC4xLDIuNSwwLjksMy44ICAgICBDMi44LDQwLjQsMC4xLDQ2LjQtMC43LDUxYy0wLjIsMC45LTAuMywxLjgtMC4zLDIuN2MwLDAuNSwwLDEsMCwxLjRDLTEsNTgsMC4xLDYzLjEsMC41LDY1eiIgZmlsbD0iIzZCMzYzRSIvPjwvZz48L2c+PC9zdmc+"
                                                                              src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgLTI3IDI0IDEwMCAxMDAiIGhlaWdodD0iMTAwcHgiIGlkPSJtYWxlMyIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSItMjcgMjQgMTAwIDEwMCIgd2lkdGg9IjEwMHB4IiB4bWw6c3BhY2U9InByZXNlcnZlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnNrZXRjaD0iaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoL25zIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+PGc+PGc+PGNpcmNsZSBjeD0iMjMiIGN5PSI3NCIgZmlsbD0iI0Y1RUVFNSIgcj0iNTAiLz48Zz48ZGVmcz48Y2lyY2xlIGN4PSIyMyIgY3k9Ijc0IiBpZD0iU1ZHSURfMV8iIHI9IjUwIi8+PC9kZWZzPjxjbGlwUGF0aCBpZD0iU1ZHSURfMl8iPjx1c2Ugb3ZlcmZsb3c9InZpc2libGUiIHhsaW5rOmhyZWY9IiNTVkdJRF8xXyIvPjwvY2xpcFBhdGg+PHBhdGggY2xpcC1wYXRoPSJ1cmwoI1NWR0lEXzJfKSIgZD0iTTM4LDk5LjlsMjcuOSw3LjdjMy4yLDEuMSw1LjcsMy41LDcuMSw2LjZ2OS44SC0yN3YtOS44ICAgICAgYzEuMy0zLjEsMy45LTUuNSw3LjEtNi42TDgsOTkuOVY4NWgzMFY5OS45eiIgZmlsbD0iI0U2QzE5QyIvPjxnIGNsaXAtcGF0aD0idXJsKCNTVkdJRF8yXykiPjxkZWZzPjxwYXRoIGQ9Ik0zOCw5OS45bDI3LjksNy43YzMuMiwxLjEsNS43LDMuNSw3LjEsNi42djkuOEgtMjd2LTkuOGMxLjMtMy4xLDMuOS01LjUsNy4xLTYuNkw4LDk5LjlWODVoMzBWOTkuOXoiIGlkPSJTVkdJRF8zXyIvPjwvZGVmcz48Y2xpcFBhdGggaWQ9IlNWR0lEXzRfIj48dXNlIG92ZXJmbG93PSJ2aXNpYmxlIiB4bGluazpocmVmPSIjU1ZHSURfM18iLz48L2NsaXBQYXRoPjxwYXRoIGNsaXAtcGF0aD0idXJsKCNTVkdJRF80XykiIGQ9Ik0tMjcsODJINzN2NDJILTI3VjgyeiBNMjMsMTEyYzExLDAsMjAtNi4zLDIwLTE0cy05LTE0LTIwLTE0UzMsOTAuMywzLDk4ICAgICAgIFMxMiwxMTIsMjMsMTEyeiIgZmlsbD0iI0U2QTQyMiIvPjxwYXRoIGNsaXAtcGF0aD0idXJsKCNTVkdJRF80XykiIGQ9Ik0yMywxMDJjLTEuNywwLTMuOS0wLjQtNS40LTEuMWMtMS43LTAuOS04LTYuMS0xMC4yLTguMyAgICAgICBjLTIuOC0zLTQuMi02LjgtNC42LTEzLjNjLTAuNC02LjUtMi4xLTI5LjctMi4xLTM1YzAtNy41LDUuNy0xOS4yLDIyLjEtMTkuMmwwLjEsMGwwLDBsMCwwbDAuMSwwICAgICAgIGMxNi41LDAuMSwyMi4xLDExLjcsMjIuMSwxOS4yYzAsNS4zLTEuNywyOC41LTIuMSwzNWMtMC40LDYuNS0xLjgsMTAuMi00LjYsMTMuM2MtMi4xLDIuMy04LjQsNy40LTEwLjIsOC4zICAgICAgIEMyNi45LDEwMS42LDI0LjcsMTAyLDIzLDEwMkwyMywxMDJ6IiBmaWxsPSIjRDRCMDhDIi8+PHBhdGggY2xpcC1wYXRoPSJ1cmwoI1NWR0lEXzRfKSIgZD0iTTIzLDgyQzEwLjMsODIsMCw4OS40LDAsOTguNVMxMC4zLDExNSwyMywxMTVzMjMtNy40LDIzLTE2LjUgICAgICAgUzM1LjcsODIsMjMsODJ6IE0yMywxMTFjLTEwLjUsMC0xOS02LTE5LTEzLjVTMTIuNSw4NCwyMyw4NHMxOSw2LDE5LDEzLjVTMzMuNSwxMTEsMjMsMTExeiIgZmlsbD0iI0Q5OEMyMSIvPjwvZz48L2c+PHBhdGggZD0iTTIzLDk4Yy0xLjUsMC0zLjUtMC4zLTQuOC0wLjljLTEuNi0wLjctNy4yLTQuNi05LjEtNi4zYy0yLjUtMi4zLTMuOC01LjEtNC4yLTEwUzMsNTguNSwzLDU0LjUgICAgIEMzLDQ4LjgsOC4xLDQwLDIzLDQwbDAsMGwwLDBsMCwwbDAsMEMzNy45LDQwLDQzLDQ4LjgsNDMsNTQuNWMwLDQtMS41LDIxLjUtMS45LDI2LjRzLTEuNiw3LjctNC4yLDEwYy0xLjksMS43LTcuNiw1LjYtOS4xLDYuMyAgICAgQzI2LjUsOTcuNywyNC41LDk4LDIzLDk4TDIzLDk4eiIgZmlsbD0iI0YyQ0VBNSIvPjxwYXRoIGQ9Ik0zMCw4NS41Yy0xLjksMi01LjIsMy04LjEsMi40Yy0yLjctMC42LTQuNy0yLTUuNy00LjNMMzAsODUuNXoiIGZpbGw9IiNBMzcwNUYiLz48cGF0aCBkPSJNMzAsODUuNWMtMS45LDItNS4yLDMtOC4xLDIuNCAgICAgYy0yLjctMC42LTQuNy0yLTUuNy00LjNMMzAsODUuNXoiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0EzNzA1RiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+PGc+PGRlZnM+PHJlY3QgaGVpZ2h0PSI1IiBpZD0iU1ZHSURfNV8iIHdpZHRoPSIzMSIgeD0iNyIgeT0iNjUiLz48L2RlZnM+PGNsaXBQYXRoIGlkPSJTVkdJRF82XyI+PHVzZSBvdmVyZmxvdz0idmlzaWJsZSIgeGxpbms6aHJlZj0iI1NWR0lEXzVfIi8+PC9jbGlwUGF0aD48Y2lyY2xlIGNsaXAtcGF0aD0idXJsKCNTVkdJRF82XykiIGN4PSIzMiIgY3k9IjY5IiBmaWxsPSIjMjkxRjIxIiByPSIyIi8+PGNpcmNsZSBjbGlwLXBhdGg9InVybCgjU1ZHSURfNl8pIiBjeD0iMTQiIGN5PSI2OSIgZmlsbD0iIzI5MUYyMSIgcj0iMiIvPjwvZz48cGF0aCBkPSJNOCw2NmMwLDAsMS4xLTMsNi4xLTNjMy40LDAsNS40LDEuNSw2LjQsMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjQ0M5ODcyIiBzdHJva2Utd2lkdGg9IjIiLz48cGF0aCBkPSJNMzguMSw2NmMwLDAtMS4xLTMtNi4xLTNjLTQuOCwwLTcsMy03LDVjMCwxLjksMCw5LDAsOSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjQkI4NjYwIiBzdHJva2Utd2lkdGg9IjIiLz48cGF0aCBkPSJNNDEuOCw3Mi4yYzAsMCwwLjgtNi4zLDMuNy03LjJjMC40LTEuOCwxLjUtNywxLjUtOS45cy0wLjMtNS43LTEuOS04LjFjLTEuOC0yLjYtNS42LTQuMS03LjYtNC4xICAgICBjLTIuMywxLjQtNy43LDQuNi05LjQsNi41Yy0wLjksMSwwLjQsMS44LDAuNCwxLjhzMS4yLTAuNSwxLjctMC42YzIuNS0wLjcsOC0xLjIsOS43LDEuM0M0Miw1NC45LDQyLDYzLjcsNDIsNjUgICAgIEM0Miw2Ni4yLDQxLjgsNzIuMiw0MS44LDcyLjJ6IiBmaWxsPSIjNDUyMjI4Ii8+PHBhdGggZD0iTTAuNSw2NWMyLjksMSwzLjcsNy4yLDMuNyw3LjJTNCw2Ni4yLDQsNjVjMC0xLjYsMC4yLTkuMSwzLjQtMTIuN2MzLjYtNCw4LjQtNS4zLDExLjEtMy41ICAgICBjMS40LDAuOSw2LjEsNS41LDExLjEsMS43YzMtMi4zLDguNS03LjUsOC41LTcuNXMtMi45LTguOS0xNi4xLTcuOWMtNS42LDAuNS0xMS44LTAuOS0xMS44LTAuOXMtMC4xLDIuNSwwLjksMy44ICAgICBDMi44LDQwLjQsMC4xLDQ2LjQtMC43LDUxYy0wLjIsMC45LTAuMywxLjgtMC4zLDIuN2MwLDAuNSwwLDEsMCwxLjRDLTEsNTgsMC4xLDYzLjEsMC41LDY1eiIgZmlsbD0iIzZCMzYzRSIvPjwvZz48L2c+PC9zdmc+"
                                                                              alt=""></div>
                                </div>

                                    <div class="info"> Hi,<br>
                                        <br>
                                        Thank you for reaching us, We are looking into this issue and will update
                                        you.<br>
                                        <br>
                                        Manu K<br>

                                        <p>Posted on 10/29/13 at 07:21</p>
                                        <hr>


                                    </div> <div class="user-profile-pic-wrapper">
                                    <div class="user-profile-pic-normal"><img width="35" height="35"
                                                                              data-src-retina="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgLTI3IDI0IDEwMCAxMDAiIGhlaWdodD0iMTAwcHgiIGlkPSJtYWxlMyIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSItMjcgMjQgMTAwIDEwMCIgd2lkdGg9IjEwMHB4IiB4bWw6c3BhY2U9InByZXNlcnZlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnNrZXRjaD0iaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoL25zIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+PGc+PGc+PGNpcmNsZSBjeD0iMjMiIGN5PSI3NCIgZmlsbD0iI0Y1RUVFNSIgcj0iNTAiLz48Zz48ZGVmcz48Y2lyY2xlIGN4PSIyMyIgY3k9Ijc0IiBpZD0iU1ZHSURfMV8iIHI9IjUwIi8+PC9kZWZzPjxjbGlwUGF0aCBpZD0iU1ZHSURfMl8iPjx1c2Ugb3ZlcmZsb3c9InZpc2libGUiIHhsaW5rOmhyZWY9IiNTVkdJRF8xXyIvPjwvY2xpcFBhdGg+PHBhdGggY2xpcC1wYXRoPSJ1cmwoI1NWR0lEXzJfKSIgZD0iTTM4LDk5LjlsMjcuOSw3LjdjMy4yLDEuMSw1LjcsMy41LDcuMSw2LjZ2OS44SC0yN3YtOS44ICAgICAgYzEuMy0zLjEsMy45LTUuNSw3LjEtNi42TDgsOTkuOVY4NWgzMFY5OS45eiIgZmlsbD0iI0U2QzE5QyIvPjxnIGNsaXAtcGF0aD0idXJsKCNTVkdJRF8yXykiPjxkZWZzPjxwYXRoIGQ9Ik0zOCw5OS45bDI3LjksNy43YzMuMiwxLjEsNS43LDMuNSw3LjEsNi42djkuOEgtMjd2LTkuOGMxLjMtMy4xLDMuOS01LjUsNy4xLTYuNkw4LDk5LjlWODVoMzBWOTkuOXoiIGlkPSJTVkdJRF8zXyIvPjwvZGVmcz48Y2xpcFBhdGggaWQ9IlNWR0lEXzRfIj48dXNlIG92ZXJmbG93PSJ2aXNpYmxlIiB4bGluazpocmVmPSIjU1ZHSURfM18iLz48L2NsaXBQYXRoPjxwYXRoIGNsaXAtcGF0aD0idXJsKCNTVkdJRF80XykiIGQ9Ik0tMjcsODJINzN2NDJILTI3VjgyeiBNMjMsMTEyYzExLDAsMjAtNi4zLDIwLTE0cy05LTE0LTIwLTE0UzMsOTAuMywzLDk4ICAgICAgIFMxMiwxMTIsMjMsMTEyeiIgZmlsbD0iI0U2QTQyMiIvPjxwYXRoIGNsaXAtcGF0aD0idXJsKCNTVkdJRF80XykiIGQ9Ik0yMywxMDJjLTEuNywwLTMuOS0wLjQtNS40LTEuMWMtMS43LTAuOS04LTYuMS0xMC4yLTguMyAgICAgICBjLTIuOC0zLTQuMi02LjgtNC42LTEzLjNjLTAuNC02LjUtMi4xLTI5LjctMi4xLTM1YzAtNy41LDUuNy0xOS4yLDIyLjEtMTkuMmwwLjEsMGwwLDBsMCwwbDAuMSwwICAgICAgIGMxNi41LDAuMSwyMi4xLDExLjcsMjIuMSwxOS4yYzAsNS4zLTEuNywyOC41LTIuMSwzNWMtMC40LDYuNS0xLjgsMTAuMi00LjYsMTMuM2MtMi4xLDIuMy04LjQsNy40LTEwLjIsOC4zICAgICAgIEMyNi45LDEwMS42LDI0LjcsMTAyLDIzLDEwMkwyMywxMDJ6IiBmaWxsPSIjRDRCMDhDIi8+PHBhdGggY2xpcC1wYXRoPSJ1cmwoI1NWR0lEXzRfKSIgZD0iTTIzLDgyQzEwLjMsODIsMCw4OS40LDAsOTguNVMxMC4zLDExNSwyMywxMTVzMjMtNy40LDIzLTE2LjUgICAgICAgUzM1LjcsODIsMjMsODJ6IE0yMywxMTFjLTEwLjUsMC0xOS02LTE5LTEzLjVTMTIuNSw4NCwyMyw4NHMxOSw2LDE5LDEzLjVTMzMuNSwxMTEsMjMsMTExeiIgZmlsbD0iI0Q5OEMyMSIvPjwvZz48L2c+PHBhdGggZD0iTTIzLDk4Yy0xLjUsMC0zLjUtMC4zLTQuOC0wLjljLTEuNi0wLjctNy4yLTQuNi05LjEtNi4zYy0yLjUtMi4zLTMuOC01LjEtNC4yLTEwUzMsNTguNSwzLDU0LjUgICAgIEMzLDQ4LjgsOC4xLDQwLDIzLDQwbDAsMGwwLDBsMCwwbDAsMEMzNy45LDQwLDQzLDQ4LjgsNDMsNTQuNWMwLDQtMS41LDIxLjUtMS45LDI2LjRzLTEuNiw3LjctNC4yLDEwYy0xLjksMS43LTcuNiw1LjYtOS4xLDYuMyAgICAgQzI2LjUsOTcuNywyNC41LDk4LDIzLDk4TDIzLDk4eiIgZmlsbD0iI0YyQ0VBNSIvPjxwYXRoIGQ9Ik0zMCw4NS41Yy0xLjksMi01LjIsMy04LjEsMi40Yy0yLjctMC42LTQuNy0yLTUuNy00LjNMMzAsODUuNXoiIGZpbGw9IiNBMzcwNUYiLz48cGF0aCBkPSJNMzAsODUuNWMtMS45LDItNS4yLDMtOC4xLDIuNCAgICAgYy0yLjctMC42LTQuNy0yLTUuNy00LjNMMzAsODUuNXoiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0EzNzA1RiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+PGc+PGRlZnM+PHJlY3QgaGVpZ2h0PSI1IiBpZD0iU1ZHSURfNV8iIHdpZHRoPSIzMSIgeD0iNyIgeT0iNjUiLz48L2RlZnM+PGNsaXBQYXRoIGlkPSJTVkdJRF82XyI+PHVzZSBvdmVyZmxvdz0idmlzaWJsZSIgeGxpbms6aHJlZj0iI1NWR0lEXzVfIi8+PC9jbGlwUGF0aD48Y2lyY2xlIGNsaXAtcGF0aD0idXJsKCNTVkdJRF82XykiIGN4PSIzMiIgY3k9IjY5IiBmaWxsPSIjMjkxRjIxIiByPSIyIi8+PGNpcmNsZSBjbGlwLXBhdGg9InVybCgjU1ZHSURfNl8pIiBjeD0iMTQiIGN5PSI2OSIgZmlsbD0iIzI5MUYyMSIgcj0iMiIvPjwvZz48cGF0aCBkPSJNOCw2NmMwLDAsMS4xLTMsNi4xLTNjMy40LDAsNS40LDEuNSw2LjQsMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjQ0M5ODcyIiBzdHJva2Utd2lkdGg9IjIiLz48cGF0aCBkPSJNMzguMSw2NmMwLDAtMS4xLTMtNi4xLTNjLTQuOCwwLTcsMy03LDVjMCwxLjksMCw5LDAsOSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjQkI4NjYwIiBzdHJva2Utd2lkdGg9IjIiLz48cGF0aCBkPSJNNDEuOCw3Mi4yYzAsMCwwLjgtNi4zLDMuNy03LjJjMC40LTEuOCwxLjUtNywxLjUtOS45cy0wLjMtNS43LTEuOS04LjFjLTEuOC0yLjYtNS42LTQuMS03LjYtNC4xICAgICBjLTIuMywxLjQtNy43LDQuNi05LjQsNi41Yy0wLjksMSwwLjQsMS44LDAuNCwxLjhzMS4yLTAuNSwxLjctMC42YzIuNS0wLjcsOC0xLjIsOS43LDEuM0M0Miw1NC45LDQyLDYzLjcsNDIsNjUgICAgIEM0Miw2Ni4yLDQxLjgsNzIuMiw0MS44LDcyLjJ6IiBmaWxsPSIjNDUyMjI4Ii8+PHBhdGggZD0iTTAuNSw2NWMyLjksMSwzLjcsNy4yLDMuNyw3LjJTNCw2Ni4yLDQsNjVjMC0xLjYsMC4yLTkuMSwzLjQtMTIuN2MzLjYtNCw4LjQtNS4zLDExLjEtMy41ICAgICBjMS40LDAuOSw2LjEsNS41LDExLjEsMS43YzMtMi4zLDguNS03LjUsOC41LTcuNXMtMi45LTguOS0xNi4xLTcuOWMtNS42LDAuNS0xMS44LTAuOS0xMS44LTAuOXMtMC4xLDIuNSwwLjksMy44ICAgICBDMi44LDQwLjQsMC4xLDQ2LjQtMC43LDUxYy0wLjIsMC45LTAuMywxLjgtMC4zLDIuN2MwLDAuNSwwLDEsMCwxLjRDLTEsNTgsMC4xLDYzLjEsMC41LDY1eiIgZmlsbD0iIzZCMzYzRSIvPjwvZz48L2c+PC9zdmc+"
                                                                              data-src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgLTI3IDI0IDEwMCAxMDAiIGhlaWdodD0iMTAwcHgiIGlkPSJtYWxlMyIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSItMjcgMjQgMTAwIDEwMCIgd2lkdGg9IjEwMHB4IiB4bWw6c3BhY2U9InByZXNlcnZlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnNrZXRjaD0iaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoL25zIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+PGc+PGc+PGNpcmNsZSBjeD0iMjMiIGN5PSI3NCIgZmlsbD0iI0Y1RUVFNSIgcj0iNTAiLz48Zz48ZGVmcz48Y2lyY2xlIGN4PSIyMyIgY3k9Ijc0IiBpZD0iU1ZHSURfMV8iIHI9IjUwIi8+PC9kZWZzPjxjbGlwUGF0aCBpZD0iU1ZHSURfMl8iPjx1c2Ugb3ZlcmZsb3c9InZpc2libGUiIHhsaW5rOmhyZWY9IiNTVkdJRF8xXyIvPjwvY2xpcFBhdGg+PHBhdGggY2xpcC1wYXRoPSJ1cmwoI1NWR0lEXzJfKSIgZD0iTTM4LDk5LjlsMjcuOSw3LjdjMy4yLDEuMSw1LjcsMy41LDcuMSw2LjZ2OS44SC0yN3YtOS44ICAgICAgYzEuMy0zLjEsMy45LTUuNSw3LjEtNi42TDgsOTkuOVY4NWgzMFY5OS45eiIgZmlsbD0iI0U2QzE5QyIvPjxnIGNsaXAtcGF0aD0idXJsKCNTVkdJRF8yXykiPjxkZWZzPjxwYXRoIGQ9Ik0zOCw5OS45bDI3LjksNy43YzMuMiwxLjEsNS43LDMuNSw3LjEsNi42djkuOEgtMjd2LTkuOGMxLjMtMy4xLDMuOS01LjUsNy4xLTYuNkw4LDk5LjlWODVoMzBWOTkuOXoiIGlkPSJTVkdJRF8zXyIvPjwvZGVmcz48Y2xpcFBhdGggaWQ9IlNWR0lEXzRfIj48dXNlIG92ZXJmbG93PSJ2aXNpYmxlIiB4bGluazpocmVmPSIjU1ZHSURfM18iLz48L2NsaXBQYXRoPjxwYXRoIGNsaXAtcGF0aD0idXJsKCNTVkdJRF80XykiIGQ9Ik0tMjcsODJINzN2NDJILTI3VjgyeiBNMjMsMTEyYzExLDAsMjAtNi4zLDIwLTE0cy05LTE0LTIwLTE0UzMsOTAuMywzLDk4ICAgICAgIFMxMiwxMTIsMjMsMTEyeiIgZmlsbD0iI0U2QTQyMiIvPjxwYXRoIGNsaXAtcGF0aD0idXJsKCNTVkdJRF80XykiIGQ9Ik0yMywxMDJjLTEuNywwLTMuOS0wLjQtNS40LTEuMWMtMS43LTAuOS04LTYuMS0xMC4yLTguMyAgICAgICBjLTIuOC0zLTQuMi02LjgtNC42LTEzLjNjLTAuNC02LjUtMi4xLTI5LjctMi4xLTM1YzAtNy41LDUuNy0xOS4yLDIyLjEtMTkuMmwwLjEsMGwwLDBsMCwwbDAuMSwwICAgICAgIGMxNi41LDAuMSwyMi4xLDExLjcsMjIuMSwxOS4yYzAsNS4zLTEuNywyOC41LTIuMSwzNWMtMC40LDYuNS0xLjgsMTAuMi00LjYsMTMuM2MtMi4xLDIuMy04LjQsNy40LTEwLjIsOC4zICAgICAgIEMyNi45LDEwMS42LDI0LjcsMTAyLDIzLDEwMkwyMywxMDJ6IiBmaWxsPSIjRDRCMDhDIi8+PHBhdGggY2xpcC1wYXRoPSJ1cmwoI1NWR0lEXzRfKSIgZD0iTTIzLDgyQzEwLjMsODIsMCw4OS40LDAsOTguNVMxMC4zLDExNSwyMywxMTVzMjMtNy40LDIzLTE2LjUgICAgICAgUzM1LjcsODIsMjMsODJ6IE0yMywxMTFjLTEwLjUsMC0xOS02LTE5LTEzLjVTMTIuNSw4NCwyMyw4NHMxOSw2LDE5LDEzLjVTMzMuNSwxMTEsMjMsMTExeiIgZmlsbD0iI0Q5OEMyMSIvPjwvZz48L2c+PHBhdGggZD0iTTIzLDk4Yy0xLjUsMC0zLjUtMC4zLTQuOC0wLjljLTEuNi0wLjctNy4yLTQuNi05LjEtNi4zYy0yLjUtMi4zLTMuOC01LjEtNC4yLTEwUzMsNTguNSwzLDU0LjUgICAgIEMzLDQ4LjgsOC4xLDQwLDIzLDQwbDAsMGwwLDBsMCwwbDAsMEMzNy45LDQwLDQzLDQ4LjgsNDMsNTQuNWMwLDQtMS41LDIxLjUtMS45LDI2LjRzLTEuNiw3LjctNC4yLDEwYy0xLjksMS43LTcuNiw1LjYtOS4xLDYuMyAgICAgQzI2LjUsOTcuNywyNC41LDk4LDIzLDk4TDIzLDk4eiIgZmlsbD0iI0YyQ0VBNSIvPjxwYXRoIGQ9Ik0zMCw4NS41Yy0xLjksMi01LjIsMy04LjEsMi40Yy0yLjctMC42LTQuNy0yLTUuNy00LjNMMzAsODUuNXoiIGZpbGw9IiNBMzcwNUYiLz48cGF0aCBkPSJNMzAsODUuNWMtMS45LDItNS4yLDMtOC4xLDIuNCAgICAgYy0yLjctMC42LTQuNy0yLTUuNy00LjNMMzAsODUuNXoiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0EzNzA1RiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+PGc+PGRlZnM+PHJlY3QgaGVpZ2h0PSI1IiBpZD0iU1ZHSURfNV8iIHdpZHRoPSIzMSIgeD0iNyIgeT0iNjUiLz48L2RlZnM+PGNsaXBQYXRoIGlkPSJTVkdJRF82XyI+PHVzZSBvdmVyZmxvdz0idmlzaWJsZSIgeGxpbms6aHJlZj0iI1NWR0lEXzVfIi8+PC9jbGlwUGF0aD48Y2lyY2xlIGNsaXAtcGF0aD0idXJsKCNTVkdJRF82XykiIGN4PSIzMiIgY3k9IjY5IiBmaWxsPSIjMjkxRjIxIiByPSIyIi8+PGNpcmNsZSBjbGlwLXBhdGg9InVybCgjU1ZHSURfNl8pIiBjeD0iMTQiIGN5PSI2OSIgZmlsbD0iIzI5MUYyMSIgcj0iMiIvPjwvZz48cGF0aCBkPSJNOCw2NmMwLDAsMS4xLTMsNi4xLTNjMy40LDAsNS40LDEuNSw2LjQsMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjQ0M5ODcyIiBzdHJva2Utd2lkdGg9IjIiLz48cGF0aCBkPSJNMzguMSw2NmMwLDAtMS4xLTMtNi4xLTNjLTQuOCwwLTcsMy03LDVjMCwxLjksMCw5LDAsOSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjQkI4NjYwIiBzdHJva2Utd2lkdGg9IjIiLz48cGF0aCBkPSJNNDEuOCw3Mi4yYzAsMCwwLjgtNi4zLDMuNy03LjJjMC40LTEuOCwxLjUtNywxLjUtOS45cy0wLjMtNS43LTEuOS04LjFjLTEuOC0yLjYtNS42LTQuMS03LjYtNC4xICAgICBjLTIuMywxLjQtNy43LDQuNi05LjQsNi41Yy0wLjksMSwwLjQsMS44LDAuNCwxLjhzMS4yLTAuNSwxLjctMC42YzIuNS0wLjcsOC0xLjIsOS43LDEuM0M0Miw1NC45LDQyLDYzLjcsNDIsNjUgICAgIEM0Miw2Ni4yLDQxLjgsNzIuMiw0MS44LDcyLjJ6IiBmaWxsPSIjNDUyMjI4Ii8+PHBhdGggZD0iTTAuNSw2NWMyLjksMSwzLjcsNy4yLDMuNyw3LjJTNCw2Ni4yLDQsNjVjMC0xLjYsMC4yLTkuMSwzLjQtMTIuN2MzLjYtNCw4LjQtNS4zLDExLjEtMy41ICAgICBjMS40LDAuOSw2LjEsNS41LDExLjEsMS43YzMtMi4zLDguNS03LjUsOC41LTcuNXMtMi45LTguOS0xNi4xLTcuOWMtNS42LDAuNS0xMS44LTAuOS0xMS44LTAuOXMtMC4xLDIuNSwwLjksMy44ICAgICBDMi44LDQwLjQsMC4xLDQ2LjQtMC43LDUxYy0wLjIsMC45LTAuMywxLjgtMC4zLDIuN2MwLDAuNSwwLDEsMCwxLjRDLTEsNTgsMC4xLDYzLjEsMC41LDY1eiIgZmlsbD0iIzZCMzYzRSIvPjwvZz48L2c+PC9zdmc+"
                                                                              src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgLTI3IDI0IDEwMCAxMDAiIGhlaWdodD0iMTAwcHgiIGlkPSJtYWxlMyIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSItMjcgMjQgMTAwIDEwMCIgd2lkdGg9IjEwMHB4IiB4bWw6c3BhY2U9InByZXNlcnZlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnNrZXRjaD0iaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoL25zIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+PGc+PGc+PGNpcmNsZSBjeD0iMjMiIGN5PSI3NCIgZmlsbD0iI0Y1RUVFNSIgcj0iNTAiLz48Zz48ZGVmcz48Y2lyY2xlIGN4PSIyMyIgY3k9Ijc0IiBpZD0iU1ZHSURfMV8iIHI9IjUwIi8+PC9kZWZzPjxjbGlwUGF0aCBpZD0iU1ZHSURfMl8iPjx1c2Ugb3ZlcmZsb3c9InZpc2libGUiIHhsaW5rOmhyZWY9IiNTVkdJRF8xXyIvPjwvY2xpcFBhdGg+PHBhdGggY2xpcC1wYXRoPSJ1cmwoI1NWR0lEXzJfKSIgZD0iTTM4LDk5LjlsMjcuOSw3LjdjMy4yLDEuMSw1LjcsMy41LDcuMSw2LjZ2OS44SC0yN3YtOS44ICAgICAgYzEuMy0zLjEsMy45LTUuNSw3LjEtNi42TDgsOTkuOVY4NWgzMFY5OS45eiIgZmlsbD0iI0U2QzE5QyIvPjxnIGNsaXAtcGF0aD0idXJsKCNTVkdJRF8yXykiPjxkZWZzPjxwYXRoIGQ9Ik0zOCw5OS45bDI3LjksNy43YzMuMiwxLjEsNS43LDMuNSw3LjEsNi42djkuOEgtMjd2LTkuOGMxLjMtMy4xLDMuOS01LjUsNy4xLTYuNkw4LDk5LjlWODVoMzBWOTkuOXoiIGlkPSJTVkdJRF8zXyIvPjwvZGVmcz48Y2xpcFBhdGggaWQ9IlNWR0lEXzRfIj48dXNlIG92ZXJmbG93PSJ2aXNpYmxlIiB4bGluazpocmVmPSIjU1ZHSURfM18iLz48L2NsaXBQYXRoPjxwYXRoIGNsaXAtcGF0aD0idXJsKCNTVkdJRF80XykiIGQ9Ik0tMjcsODJINzN2NDJILTI3VjgyeiBNMjMsMTEyYzExLDAsMjAtNi4zLDIwLTE0cy05LTE0LTIwLTE0UzMsOTAuMywzLDk4ICAgICAgIFMxMiwxMTIsMjMsMTEyeiIgZmlsbD0iI0U2QTQyMiIvPjxwYXRoIGNsaXAtcGF0aD0idXJsKCNTVkdJRF80XykiIGQ9Ik0yMywxMDJjLTEuNywwLTMuOS0wLjQtNS40LTEuMWMtMS43LTAuOS04LTYuMS0xMC4yLTguMyAgICAgICBjLTIuOC0zLTQuMi02LjgtNC42LTEzLjNjLTAuNC02LjUtMi4xLTI5LjctMi4xLTM1YzAtNy41LDUuNy0xOS4yLDIyLjEtMTkuMmwwLjEsMGwwLDBsMCwwbDAuMSwwICAgICAgIGMxNi41LDAuMSwyMi4xLDExLjcsMjIuMSwxOS4yYzAsNS4zLTEuNywyOC41LTIuMSwzNWMtMC40LDYuNS0xLjgsMTAuMi00LjYsMTMuM2MtMi4xLDIuMy04LjQsNy40LTEwLjIsOC4zICAgICAgIEMyNi45LDEwMS42LDI0LjcsMTAyLDIzLDEwMkwyMywxMDJ6IiBmaWxsPSIjRDRCMDhDIi8+PHBhdGggY2xpcC1wYXRoPSJ1cmwoI1NWR0lEXzRfKSIgZD0iTTIzLDgyQzEwLjMsODIsMCw4OS40LDAsOTguNVMxMC4zLDExNSwyMywxMTVzMjMtNy40LDIzLTE2LjUgICAgICAgUzM1LjcsODIsMjMsODJ6IE0yMywxMTFjLTEwLjUsMC0xOS02LTE5LTEzLjVTMTIuNSw4NCwyMyw4NHMxOSw2LDE5LDEzLjVTMzMuNSwxMTEsMjMsMTExeiIgZmlsbD0iI0Q5OEMyMSIvPjwvZz48L2c+PHBhdGggZD0iTTIzLDk4Yy0xLjUsMC0zLjUtMC4zLTQuOC0wLjljLTEuNi0wLjctNy4yLTQuNi05LjEtNi4zYy0yLjUtMi4zLTMuOC01LjEtNC4yLTEwUzMsNTguNSwzLDU0LjUgICAgIEMzLDQ4LjgsOC4xLDQwLDIzLDQwbDAsMGwwLDBsMCwwbDAsMEMzNy45LDQwLDQzLDQ4LjgsNDMsNTQuNWMwLDQtMS41LDIxLjUtMS45LDI2LjRzLTEuNiw3LjctNC4yLDEwYy0xLjksMS43LTcuNiw1LjYtOS4xLDYuMyAgICAgQzI2LjUsOTcuNywyNC41LDk4LDIzLDk4TDIzLDk4eiIgZmlsbD0iI0YyQ0VBNSIvPjxwYXRoIGQ9Ik0zMCw4NS41Yy0xLjksMi01LjIsMy04LjEsMi40Yy0yLjctMC42LTQuNy0yLTUuNy00LjNMMzAsODUuNXoiIGZpbGw9IiNBMzcwNUYiLz48cGF0aCBkPSJNMzAsODUuNWMtMS45LDItNS4yLDMtOC4xLDIuNCAgICAgYy0yLjctMC42LTQuNy0yLTUuNy00LjNMMzAsODUuNXoiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0EzNzA1RiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+PGc+PGRlZnM+PHJlY3QgaGVpZ2h0PSI1IiBpZD0iU1ZHSURfNV8iIHdpZHRoPSIzMSIgeD0iNyIgeT0iNjUiLz48L2RlZnM+PGNsaXBQYXRoIGlkPSJTVkdJRF82XyI+PHVzZSBvdmVyZmxvdz0idmlzaWJsZSIgeGxpbms6aHJlZj0iI1NWR0lEXzVfIi8+PC9jbGlwUGF0aD48Y2lyY2xlIGNsaXAtcGF0aD0idXJsKCNTVkdJRF82XykiIGN4PSIzMiIgY3k9IjY5IiBmaWxsPSIjMjkxRjIxIiByPSIyIi8+PGNpcmNsZSBjbGlwLXBhdGg9InVybCgjU1ZHSURfNl8pIiBjeD0iMTQiIGN5PSI2OSIgZmlsbD0iIzI5MUYyMSIgcj0iMiIvPjwvZz48cGF0aCBkPSJNOCw2NmMwLDAsMS4xLTMsNi4xLTNjMy40LDAsNS40LDEuNSw2LjQsMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjQ0M5ODcyIiBzdHJva2Utd2lkdGg9IjIiLz48cGF0aCBkPSJNMzguMSw2NmMwLDAtMS4xLTMtNi4xLTNjLTQuOCwwLTcsMy03LDVjMCwxLjksMCw5LDAsOSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjQkI4NjYwIiBzdHJva2Utd2lkdGg9IjIiLz48cGF0aCBkPSJNNDEuOCw3Mi4yYzAsMCwwLjgtNi4zLDMuNy03LjJjMC40LTEuOCwxLjUtNywxLjUtOS45cy0wLjMtNS43LTEuOS04LjFjLTEuOC0yLjYtNS42LTQuMS03LjYtNC4xICAgICBjLTIuMywxLjQtNy43LDQuNi05LjQsNi41Yy0wLjksMSwwLjQsMS44LDAuNCwxLjhzMS4yLTAuNSwxLjctMC42YzIuNS0wLjcsOC0xLjIsOS43LDEuM0M0Miw1NC45LDQyLDYzLjcsNDIsNjUgICAgIEM0Miw2Ni4yLDQxLjgsNzIuMiw0MS44LDcyLjJ6IiBmaWxsPSIjNDUyMjI4Ii8+PHBhdGggZD0iTTAuNSw2NWMyLjksMSwzLjcsNy4yLDMuNyw3LjJTNCw2Ni4yLDQsNjVjMC0xLjYsMC4yLTkuMSwzLjQtMTIuN2MzLjYtNCw4LjQtNS4zLDExLjEtMy41ICAgICBjMS40LDAuOSw2LjEsNS41LDExLjEsMS43YzMtMi4zLDguNS03LjUsOC41LTcuNXMtMi45LTguOS0xNi4xLTcuOWMtNS42LDAuNS0xMS44LTAuOS0xMS44LTAuOXMtMC4xLDIuNSwwLjksMy44ICAgICBDMi44LDQwLjQsMC4xLDQ2LjQtMC43LDUxYy0wLjIsMC45LTAuMywxLjgtMC4zLDIuN2MwLDAuNSwwLDEsMCwxLjRDLTEsNTgsMC4xLDYzLjEsMC41LDY1eiIgZmlsbD0iIzZCMzYzRSIvPjwvZz48L2c+PC9zdmc+"
                                                                              alt=""></div>
                                </div>

                                    <div class="info"> Hi,<br>
                                        <br>
                                        Thank you for reaching us, We are looking into this issue and will update
                                        you.<br>
                                        <br>
                                        Manu K<br>

                                        <p>Posted on 10/29/13 at 07:21</p>
                                        <hr>
                                    </div>
                                <div class="row col-xs-12">
                                <div id="results{{$ticket->id}}"></div>
                                <div align="center">
                                    <button class="load_more" id="load_more_button">load More</button>

                                    <div class="animation_image" style="display:none;"><img src="/assets/img/load.gif"> Loading...</div>
                                </div>  <hr>
                                </div>

                                <div class="info-wrapper">
                                    <div class="form-row-stripped">


                                         <span><div class="input-with-icon  right"><i class=""></i>
                                            <input type="text" id="replaybox{{$ticket->id}}"> <label ><button id="replay{{$ticket->id}}" class="btn btn-primary btn-xs fa fa-reply"></i>&nbsp;Comment</button>
                                                     <script>
                                                      //   load_more({{$ticket->id}});
                                                         $("#replaybox{{$ticket->id}}").keyup(function (event) {
                                                             if (event.keyCode == 13) {
                                                                 $("#replay{{$ticket->id}}").click();
                                                             }
                                                         });
                                                         $("#replay{{$ticket->id}}").on('click', function () {
                                                             var comment = $("#replaybox{{$ticket->id}}").val();
                                                             alert(comment);
                                                             replay({{$ticket->id}},comment);

                                                         });

                                                     </script>
                                        </div></span>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>


                </div>
                @endforeach
            </div>



    </div>

    <div class="row">
        <div class="col-md-12">

                {{ $tickets->links() }}
        </div>
    </div>













@stop
@section('javascript')
    {{HTML::script('assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}
    {{HTML::script('assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}

    {{HTML::script('assets/js/support_ticket.js')}}



        <script type="text/javascript">


            $('#btn-new-ticket').on('click', function (e) {


                $("#Product_id option[value='']").remove();
                $.ajax({
                    type: "GET",
                    url: "{{{ URL::to('/profile/'.$user->username.'/products/list') }}}",
                    success: function (data) {
                        // Parse the returned json data

                        // Use jQuery's each to iterate over the opts value
                        $.each(data, function (i, d) {
                            // You will need to alter the below to get the right values from your json object.  Guessing that d.id / d.modelName are columns in your carModels data
                            $('#Product_id').append('<option value="' + d.id + '">' + d.Vendor + " : " + d.Name + '</option>');
                        });
                    }
                });
            });
            load_more(4,"rdge");
            function load_more(id) {

                var track_click = 1; //track user click on "load more" button, righ now it is 0 click
                alert(id);


                $.ajax({
                    type: "GET",
                    url: "{{{ URL::to('/profile/'.$user->username.'/comments?page=') }}}"+track_click,
                    success: function (data) {
                        // Parse the returned json data
                        $(".load_more").show();
                        $("#products").html("");
                        $( "#page-selection" ).show();
                        if (data.comments != '') {
                            $.each(data.comments, function (key, value) {

                                r = "<div class=\"user-profile-pic-wrapper\"><div class=\"user-profile-pic-normal\"><img width=\"35\" height=\"35\" data-src-retina=\"\" alt=\"\"> "+value.user.fname+"</div></div><div class=\"info\"> <br><br> "+value.comment+"<br><p>Posted on "+value.updated_at+"</p><hr> </div>";

                                $("#results"+value.ticket_id).append(r); // some ajax content loading...

                            });

                        }                                                  //scroll page smoothly to button id
                        total_pages=data.pagination.last_page;

                        $("html, body").animate({scrollTop: $("#load_more_button").offset().top}, 500);
                        //hide loading image
                        $('.animation_image').hide(); //hide loading image once data is received

                        //user click increment on load button
                    }
                });

                $(document).on('click', '.load_more', function () { //user clicks on button

                    $(this).hide(); //hide load more button on click
                    $('.animation_image').show(); //show loading image
                    alert(total_pages);
                    track_click++;
                    if (track_click <= total_pages) //user click number is still less than total pages
                    {
                        $.ajax({
                            type: "GET",
                            url: "{{{ URL::to('/profile/'.$user->username.'/comments?page=') }}}"+track_click,
                            success: function (data) {
                                // Parse the returned json data

                                $(".load_more").show();
                                $("#products").html("");
                                $( "#page-selection" ).show();
                                if (data.comments != '') {
                                    $.each(data.comments, function (key, value) {
                                        r = "<div class=\"user-profile-pic-wrapper\"><div class=\"user-profile-pic-normal\"><img width=\"35\" height=\"35\" data-src-retina=\"\" alt=\"\"> "+value.user.fname+"</div></div><div class=\"info\"> <br><br> "+value.comment+"<br><p>Posted on "+value.updated_at+"</p><hr> </div>";

                                        $("#results"+value.ticket_id).append(r); // some ajax content loading...

                                    });

                                }                                                  //scroll page smoothly to button id

                                $("html, body").animate({scrollTop: $("#load_more_button").offset().top}, 500);
                                //hide loading image
                                $('.animation_image').hide(); //hide loading image once data is received

                                //user click increment on load button
                            }
                        });  //post page number and load returned data into result element
                      /*  $.post('fetch_pages.php', {'page': track_click}, function (data) {

                            $(".load_more").show(); //bring back load more button

                            $("#results").append(data); //append data received from server

                            //scroll page smoothly to button id
                            $("html, body").animate({scrollTop: $("#load_more_button").offset().top}, 500);

                            //hide loading image
                            $('.animation_image').hide(); //hide loading image once data is received

                            track_click++; //user click increment on load button

                        }).fail(function (xhr, ajaxOptions, thrownError) { //any errors?
                            alert(thrownError); //alert with HTTP error
                            $(".load_more").show(); //bring back load more button
                            $('.animation_image').hide(); //hide loading image once data is received
                        });*/


                        if (track_click >= total_pages - 1) //compare user click with page number
                        {
                            //reached end of the page yet? disable load button
                            $(".load_more").attr("disabled", "disabled");
                        }
                    }

                });

            }
            function replay(id,comment) {
                $.ajax({
                    type: "POST",
                    url: "{{{ URL::to('/profile/'.$user->username.'/comments/post') }}}",
                    data: {id: id , comment:comment},
                    cache: false,
                    success: function (data) {
                        // Parse the returned json data
                        $(".load_more").show();
                        $("#results").append(data);
                        //scroll page smoothly to button id
                        $("html, body").animate({scrollTop: $("#load_more_button").offset().top}, 500);

                        //hide loading image
                        $('.animation_image').hide(); //hide loading image once data is received

                        track_click++; //user click increment on load button
                    }
                });

            }

        $('.view').on('click', function () {

            var el = jQuery(this).parents(".box").children(".box-body");
            if (jQuery(this).hasClass("expand")) {
                jQuery(this).removeClass("expand");


                el.slideUp(200);
            } else {
                jQuery(this).removeClass("collapse").addClass("expand");
                el.slideDown(200);
            }
        });


            $( "#Purchase_id" ).bind("keyup change",function() {
                        var value = $( this ).val();


                $("#Product_id option[value='']").remove();
                $.ajax({
                    type: "GET",
                    url: "{{{ URL::to('/profile/'.$user->username.'/purchases/get') }}}",
                    data: {value: value},
                    cache: false,
                    success: function (d) {
                        // Parse the returned json data

                        if(d.id) {   // You will need to alter the below to get the right values from your json object.  Guessing that d.id / d.modelName are columns in your carModels data
                            $('#Product_id').html('<option value="' + d.id + '">' + d.Vendor + " : " + d.Name + '</option>');
                        }
                        else {
                            $('#Product_id').html("<option value='' > --invalid purchase id-- </option>");
                        }


                    }
                });

                    });


    </script>


@stop

