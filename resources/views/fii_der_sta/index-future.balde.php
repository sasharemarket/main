@extends('layouts.master')
@section('content')

<form id="indexfuture">
    <label for="">Client</label><br>
    <label for="">BUY (No. of contracts)</label><br>
    <input type="text" id="buy_no_of_contracts" name="buy_no_of_contracts" value=""><br>
    <label for="">BUY( Amt in Crores)</label><br>
    <input type="text" id="buy_amount_in_crores" name="buy_amount_in_crores" value=""><br>

    <label for="fname">SELL (No. of contracts )</label><br>
    <input type="text" id="sell_no_of_contracts" name="sell_no_of_contracts" value=""><br>
    <label for="lname">SELL (Amt in Crores)</label><br>
    <input type="text" id="sell_amount_in_crores" name="sell_amount_in_crores" value=""><br>

    <label for="lname">OPEN INTEREST AT THE END OF THE DAY (No. of contracts)</label><br>
    <input type="text" id="open_interest_at_eod" name="open_interest_at_eod" value=""><br>
    <label for="lname">Amt in Crores</label><br>
    <input type="text" id="amount_in_crores" name="amount_in_crores" value=""><br>

    <input type="button" value="Submit" id="indexfuturesubmit">

    <script>
        $('#indexfuturesubmit').on('click', function () {
            Swal.fire({
                title: 'Are you sure?',
                text: "You Want To Add Client Information",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.isConfirmed) {
                    statusofform = true; //$("#indexfuture").valid();
                    if (statusofform) {
                        $(".preloader").show();
                        var deptform = $('#indexfuture');
                        var url = "{{ env('APP_URL') }}/get-index-future-save";
                        $.ajax({
                            type: "POST",
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: url,
                            data: deptform.serialize(),
                            success: function (response) {
                                $(".preloader").hide();
                                console.log(response.status_code);


                                if (response.status_code == 500) {
                                    toastr.success(response.message);
                                    setInterval(function () {
                                        window.location = APP_URL;
                                    }, 3000);
                                } else {
                                    toastr.success(response.message);
                                    setInterval(function () {
                                        window.location = APP_URL +
                                            '/getdatadatewisedii';
                                    }, 3000);

                                }

                            },
                            error: function (errorResponse) {

                                if (errorResponse.responseJSON.status_code == 422) {
                                    $(".error").empty();
                                    $.each(errorResponse.responseJSON.message, function (
                                        key,
                                        value) {

                                        inputErrorMsg = value[0];
                                        inputId = key;
                                        $('#' + inputId).after('<label id=' +
                                            inputId +
                                            '"-error" class="error" for="' +
                                            inputId + '">' + inputErrorMsg +
                                            '</label>')
                                    });
                                    $(".preloader").hide();
                                } else {
                                    swal({
                                        titile: "Error!",
                                        text: "Something Went Wrong",
                                        icon: "error",
                                        button: "Ok",
                                    });
                                    $(".preloader").hide();
                                    window.location = APP_URL;
                                }
                            }
                        });
                    }
                }
            });
        });





        $(document).ready(function () {

            $.extend($.validator.methods, {
                spcenotallow: function (b, c, d) {
                    if (!this.depend(d, c)) return "dependency-mismatch";
                    if ("select" === c.nodeName.toLowerCase()) {
                        var e = a(c).val();
                        return e && e.length > 0
                    }
                    return this.checkable(c) ? this.getLength(b, c) > 0 : b.trim().length > 0
                }
            });
            $.validator.addMethod("alphanumericwithspace", function (value, element) {
                return this.optional(element) || /^[a-zA-Z0-9\-\s]+$/i.test(value);
            }, "Alpha Numeric With Space ");


            $("#indexfuture").validate({
                rules: {
                    buy_no_of_contracts: {
                        required: true,
                        spcenotallow: true,
                        alphanumericwithspace: true
                    },
                    buy_amount_in_crores: {
                        required: true,
                        spcenotallow: true,
                        alphanumericwithspace: true
                    },

                    sell_no_of_contracts: {
                        required: true,
                        spcenotallow: true,
                        alphanumericwithspace: true
                    },
                    sell_amount_in_crores: {
                        required: true,
                        spcenotallow: true,
                        alphanumericwithspace: true
                    },
                    open_interest_at_eod: {
                        required: true,
                        spcenotallow: true,
                        alphanumericwithspace: true
                    },
                    amount_in_crores: {
                        required: true,
                        spcenotallow: true,
                        alphanumericwithspace: true
                    },



                },
                messages: {


                    buy_no_of_contracts: {
                        required: "Enter Future Index Long",
                        spcenotallow: "Enter Some Text",
                        alphanumericwithspace: "Enter Valid Text"

                    },
                    buy_amount_in_crores: {
                        required: "Enter Future Index Short",
                        spcenotallow: "Enter Some Text",
                        alphanumericwithspace: "Enter Valid Text"

                    },

                    sell_no_of_contracts: {
                        required: "Enter Future Stock Long",
                        spcenotallow: "Enter Some Text",
                        alphanumericwithspace: "Enter Valid Text"

                    },
                    sell_amount_in_crores: {
                        required: "Enter Future Stock Short",
                        spcenotallow: "Enter Some Text",
                        alphanumericwithspace: "Enter Valid Text"

                    },
                    open_interest_at_eod: {
                        required: "Enter Option Index Call Long",
                        spcenotallow: "Enter Some Text",
                        alphanumericwithspace: "Enter Valid Text"

                    },
                    amount_in_crores: {
                        required: "Enter Option Index Put Long",
                        spcenotallow: "Enter Some Text",
                        alphanumericwithspace: "Enter Valid Text"

                    },



                }
            });
        });

    </script>
    @stop
