//for upward arrow
jQuery(document).ready(function () {

    
    $('.btn-close').click(function(){
        
        $('.custom-holiday-search').hide();
    });

    $('#mega-menu-wrap-primary #mega-menu-primary li.holiday_search').click(function(){
        
        $('.custom-holiday-search').hide();
    });

    var isgcommon = new function () {
        var me = this;
        this.isNullOrEmpty = function (value) {
            var isNullOrEmpty = true;
            if (value) {
                if (typeof (value) == 'string') {
                    if (value.length > 0)
                        isNullOrEmpty = false;
                }
                else {
                    isNullOrEmpty = false;
                }
            }
            return isNullOrEmpty;
        }
    }

    $('.count-list').on("click", function (e) {
        e.stopPropagation();
        $('.ht-type-block').hide();
        //$('ul.mega-dropdown-menu').toggleClass('h-search-dd');
        $('.country-list-block').toggle();
        $('.count-list').toggleClass('count-list-drp-block');
        $('.ht-type').removeClass('ht-drp-block');
    });

    $('.ht-type').on("click", function (e) {

        e.stopPropagation();
        $('.ht-type-block').toggle();
        //$('ul.mega-dropdown-menu').toggleClass('h-search-dd');
        $('.country-list-block').hide();
        $('.ht-type').toggleClass('ht-drp-block');
        $('.count-list').removeClass('count-list-drp-block');
    });

    $('ul.country-list li label').on("click", function (e) {
        //e.stopPropagation();

        $($('.countrylistonholdysrchnav').find('.active')).removeClass('active')//at a time we can select only one country 
        $(this).toggleClass("active");
        var countryname = $(".countrylistonholdysrchnav").find('.active').text()
        $($('#Hs_nav').find('#menu1')[0]).val($(".countrylistonholdysrchnav").find('.active .chkcount').val())
        if (!isgcommon.isNullOrEmpty(countryname)) {
            $($('#Hs_nav').find('#menu1')[0]).text('');
            $($('#Hs_nav').find('#menu1')[0]).html(countryname + '<b class="fa fa-angle-down caret-arrow" style="display: block;"></b> <b class="fa fa-angle-up caret-arrow" style="display: none"></b>');
            $('.HsCountrylistDropdown').find('.fa-angle-up').css({ "display": "none" });
            $('.country-list-block').css({ "display": "none" });
            $('.HsCountrylistDropdown').removeClass('count-list-drp-block');
            //isgcommon.ddlCountry_SelectedIndexChanged_NewHomePage('0');
        }
        else {
            $($('#Hs_nav').find('#menu1')[0]).text('COUNTRY');
        }

        //for mobile menu

        // isgcommon.ddlCountry_SelectedIndexChanged_NewHomePage('0')
    });

    $('.dropdown-submenu a.country').on("click", function (e) {
        $(this).next('ul').toggle();
        $(this).find(".fa-angle-up, .fa-angle-down").toggle();
        e.stopPropagation();
        e.preventDefault();
    });


    $('ul.gt li #gtall').on("click", function (e) {
        //on selection of all group tour all group holiday types get checd    
        if (!($('#gtall span').hasClass('oncheck_ht_dis'))) {
            e.stopPropagation();
            if (($('#gtall input:checked').length == 0)) {
                var i = 0;
                for (i = 0 ; i <= 14 ; i++) {
                    $($('#ptchk span')[i]).removeClass('oncheck_ht_dis');
                    $($('#ptchk input')[i]).prop({ disabled: false });
                    $("#ptall span").removeClass('oncheck_ht_dis');
                    $('#ptall input').prop({ disabled: false });
                }
                $("#sbtchk span").removeClass('oncheck_ht_dis');
                $('#sbtchk input').prop({ disabled: false });
                //if ($("#holitypefrmhndlr").find('ul.pt li #gtall').find('#gtchk input:checked').length == 0) {
                //  if (($('#gtchk input:checked').length >= 1)) {
                //    $($('#ptchk span')[i]).removeClass('oncheck_ht_dis');
                //    $($('#ptchk input')[i]).prop({ checked: false, disabled: true });
                //    $('#ptall span').removeClass('oncheck_ht_dis');
                //    $('#ptall input').prop({ checked: false, disabled: true });
                //  }

                //}
            }

            var $this = $(this);
            if ($('#gtall input:checked').length > 0) {

                $("#gtchk input").prop({ checked: true, disabled: true });

                if ($('.all-ht input:checked').length > 0) {
                }
                else {
                    $(".all-ht input").prop({ checked: false });
                }
            }
            else {
                $("#gtchk input").prop({ disabled: false, checked: false });
            }

            if (($('#gtall input:checked').length > 0) && $('.all-ht input:checked').length == 0) {
                var i = 0;
                for (i = 0 ; i <= 14 ; i++) {

                    $($("#ptchk span")[i]).addClass('oncheck_ht_dis');
                    $($('#ptchk input')[i]).prop({ disabled: true });
                    $("#ptall span").addClass('oncheck_ht_dis');
                    $('#ptall input').prop({ disabled: true });

                }
                $("#sbtchk span").addClass('oncheck_ht_dis');
                $('#sbtchk input').prop({ disabled: true });
            }
        }


    });

    $('ul.pt li #ptall').on("click", function (e) {             //on selection of all private tour all group holiday types get checd
        if (!($('#ptall span').hasClass('oncheck_ht_dis'))) {
            e.stopPropagation();
            if (($('#ptall input:checked').length == 0)) {
                var i = 0;
                for (i = 0 ; i <= 14 ; i++) {
                    $($('#gtchk span')[i]).removeClass('oncheck_ht_dis');
                    $($('#gtchk input')[i]).prop({ disabled: false });
                    $("#gtall span").removeClass('oncheck_ht_dis');
                    $('#gtall input').prop({ disabled: false });
                }
                $("#sbtchk span").removeClass('oncheck_ht_dis');
                $('#sbtchk input').prop({ disabled: false });
                //if ($("#holitypefrmhndlr").find('ul.pt li #ptall').find('#ptchk input:checked').length == 0) {
                //  if (($('#ptchk input:checked').length >= 1)) {
                //    $($('#gtchk span')[i]).removeClass('oncheck_ht_dis');
                //    $($('#gtchk input')[i]).prop({ checked: false, disabled: true });
                //    $('#gtall span').removeClass('oncheck_ht_dis');
                //    $('#gtall input').prop({ checked: false, disabled: true });
                //  }

                //}
            }

            var $this = $(this);
            if ($('#ptall input:checked').length > 0) {

                $("#ptchk input").prop({ disabled: true, checked: true });

                if ($('.all-ht input:checked').length > 0) {
                }
                else {
                    $(".all-ht input").prop({ checked: false });
                }
            }
            else {
                $("#ptchk input").prop({ disabled: false, checked: false });
            }

            if (($('#ptall input:checked').length == 1) && $('.all-ht input:checked').length == 0) {
                var i = 0;
                for (i = 0 ; i <= 6 ; i++) {

                    $($("#gtchk span")[i]).addClass('oncheck_ht_dis');
                    $($('#gtchk input')[i]).prop({ disabled: true });
                    $("#gtall span").addClass('oncheck_ht_dis');
                    $('#gtall input').prop({ disabled: true });

                }
                $("#sbtchk span").addClass('oncheck_ht_dis');
                $('#sbtchk input').prop({ disabled: true });
            }
        }


    });

    $('ul.pt li #sbtchk').on("click", function (e) {

        if (!($('#sbtchk span').hasClass('oncheck_ht_dis'))) {
            e.stopPropagation();
            if (($('#sbtchk input:checked').length == 0)) {
                var i = 0;
                for (i = 0 ; i <= 14 ; i++) {
                    $($('#gtchk span')[i]).removeClass('oncheck_ht_dis');
                    $($('#gtchk input')[i]).prop({ disabled: false });
                    $($('#ptchk span')[i]).removeClass('oncheck_ht_dis');
                    $($('#ptchk input')[i]).prop({ disabled: false });
                    $("#gtall span").removeClass('oncheck_ht_dis');
                    $('#gtall input').prop({ disabled: false });
                    $("#ptall span").removeClass('oncheck_ht_dis');
                    $('#ptall input').prop({ disabled: false });
                    $("#gtallHt span").removeClass('oncheck_ht_dis');
                    $('#gtallHt input').prop({ disabled: false });

                }
            }

            if (($('#sbtchk input:checked').length == 1)) {
                var i = 0;
                for (i = 0 ; i <= 14 ; i++) {
                    $($('#gtchk span')[i]).addClass('oncheck_ht_dis');
                    $($('#gtchk input')[i]).prop({ disabled: true });
                    $("#gtall span").addClass('oncheck_ht_dis');
                    $('#gtall input').prop({ disabled: true });
                    $($('#ptchk span')[i]).addClass('oncheck_ht_dis');
                    $($('#ptchk input')[i]).prop({ disabled: true });
                    $("#ptall span").addClass('oncheck_ht_dis');
                    $('#ptall input').prop({ disabled: true });
                    $("#gtallHt span").addClass('oncheck_ht_dis');
                    $('#gtallHt input').prop({ disabled: true });
                }
            }

        }

    });

    $($("#holsearchnewhome").find('.all-ht')).on("click", function (e) { //for all holiday type checkbox
        if (($('#sbtchk input:checked').length == 0)) {
            e.stopPropagation();
            if ($('.all-ht input:checked').length > 0) {
                for (i = 0 ; i <= $('#holsearchnewhome #gtchk').length ; i++) {
                    $($('#holsearchnewhome #gtchk input')[i]).prop({ checked: true, disabled: true });
                }
                for (i = 0 ; i <= $('#holsearchnewhome #ptchk').length ; i++) {
                    $($('#holsearchnewhome #ptchk input')[i]).prop({ checked: true, disabled: true });
                }
                $("#sbtchk input").prop({ checked: false, disabled: true });
                $("#sbtchk span").addClass('oncheck_ht_dis');
                $("#ptall input").prop({ checked: true, disabled: true });
                $("#gtall input").prop({ checked: true, disabled: true });
                if ($("#ptall span").hasClass('oncheck_ht_dis')) {
                    $("#ptall span").removeClass('oncheck_ht_dis');
                }
                if ($("#gtall span").hasClass('oncheck_ht_dis')) {
                    $("#gtall span").removeClass('oncheck_ht_dis');
                }

                if ($("#gtchk span").hasClass('oncheck_ht_dis')) {
                    $("#gtchk span").removeClass('oncheck_ht_dis');
                }

                if ($("#ptchk span").hasClass('oncheck_ht_dis')) {
                    $("#ptchk span").removeClass('oncheck_ht_dis');
                }

            }
            else {
                for (i = 0 ; i <= $('#holsearchnewhome #gtchk').length ; i++) {
                    $($('#holsearchnewhome #gtchk input')[i]).prop({ checked: false, disabled: false });
                }
                for (i = 0 ; i <= $('#holsearchnewhome #ptchk').length ; i++) {
                    $($('#holsearchnewhome #ptchk input')[i]).prop({ checked: false, disabled: false });
                }
                $("#ptall input").prop({ checked: false, disabled: false });
                $("#gtall input").prop({ checked: false, disabled: false });
                $("#sbtchk input").prop({ checked: false, disabled: false });
                $("#sbtchk span").removeClass('oncheck_ht_dis');
            }
        }
    });

    
    $('ul.gt li #gtchk').on("click", function (e) {
        if (!($('#gtchk span').hasClass('oncheck_ht_dis'))) {
            e.stopPropagation();
            if (($('#gtchk input').length == 0)) {
                $("#ptchk span").addClass('oncheck_ht_dis');
                $('#ptchk input').prop({ disabled: true });
                $("#ptall span").addClass('oncheck_ht_dis');
                $('#ptall input').prop({ disabled: true });
                $("#sbtchk span").addClass('oncheck_ht_dis');
                $('#sbtchk input').prop({ disabled: true });
            }
            else if (($('#gtchk input:checked').length == 0)) {
                $("#ptchk span").removeClass('oncheck_ht_dis');
                $('#ptchk input').prop({ disabled: false });
                $("#ptall span").removeClass('oncheck_ht_dis');
                $('#ptall input').prop({ disabled: false });
                $("#sbtchk span").removeClass('oncheck_ht_dis');
                $('#sbtchk input').prop({ disabled: false });

            }

            else if ($("#holitypefrmhndlr").find('ul.pt li #gtchk').length == 0) {
                if (($('#gtchk input:checked').length == 3)) {
                    $("#ptchk span").addClass('oncheck_ht_dis');
                    $('#ptchk input').prop({ disabled: true });
                    $("#ptall span").addClass('oncheck_ht_dis');
                    $('#ptall input').prop({ disabled: true });
                    $("#sbtchk span").addClass('oncheck_ht_dis');
                    $('#sbtchk input').prop({ disabled: true });
                }
                else {
                    if ($('.all-ht input:checked').length == 0) {
                        $("#ptchk span").addClass('oncheck_ht_dis');
                        $('#ptchk input').prop({ disabled: true });
                        $("#ptall span").addClass('oncheck_ht_dis');
                        $('#ptall input').prop({ disabled: true });
                        $("#sbtchk span").addClass('oncheck_ht_dis');
                        $('#sbtchk input').prop({ disabled: true });
                    }
                }

            }
        }

    });

    $('ul.pt li #ptchk').on("click", function (e) {
        if (!($('#ptchk span').hasClass('oncheck_ht_dis'))) {

            e.stopPropagation();

            if (($('#ptchk input:checked').length == 7)) {
                $("#gtchk span").addClass('oncheck_ht_dis');
                $('#gtchk input').prop({ disabled: true });
                $("#gtall span").addClass('oncheck_ht_dis');
                $('#gtall input').prop({ disabled: true });
                $("#sbtchk span").addClass('oncheck_ht_dis');
                $('#sbtchk input').prop({ disabled: true });
            }
            else if (($('#ptchk input:checked').length == 0)) {
                $("#gtchk span").removeClass('oncheck_ht_dis');
                $('#gtchk input').prop({ disabled: false });
                $("#gtall span").removeClass('oncheck_ht_dis');
                $('#gtall input').prop({ disabled: false });
                $("#sbtchk span").removeClass('oncheck_ht_dis');
                $('#sbtchk input').prop({ disabled: false });

            }

            else if ($("#holitypefrmhndlr").find('ul.pt li #ptchk').length == 5) {
                if (($('#ptchk input:checked').length == 6)) {
                    $("#gtchk span").addClass('oncheck_ht_dis');
                    $('#gtchk input').prop({ disabled: true });
                    $("#gtall span").addClass('oncheck_ht_dis');
                    $('#gtall input').prop({ disabled: true });
                    $("#sbtchk span").addClass('oncheck_ht_dis');
                    $('#sbtchk input').prop({ disabled: true });
                }
                else {
                    if ($('.all-ht input:checked').length == 0) {
                        $("#gtchk span").addClass('oncheck_ht_dis');
                        $('#gtchk input').prop({ disabled: true });
                        $("#gtall span").addClass('oncheck_ht_dis');
                        $('#gtall input').prop({ disabled: true });
                        $("#sbtchk span").addClass('oncheck_ht_dis');
                        $('#sbtchk input').prop({ disabled: true });
                    }
                }
            }
        }

    });

});



function showlist(list) {
    if (list == 'atoc') {
        $('.atoc').addClass('active');
        $('.dtof').removeClass('active');
        $('.gtoi').removeClass('active');
        $('.jtol').removeClass('active');
        $('.mtoo').removeClass('active');
        $('.ptor').removeClass('active');
        $('.stou').removeClass('active');
        $('.vtoz').removeClass('active');
        $('#list1').show();
        $('#list2').hide();
        $('#list3').hide();
        $('#list4').hide();
        $('#list5').hide();
        $('#list6').hide();
        $('#list7').hide();
        $('#list8').hide();
    }
    else if (list == 'dtof') {
        $('.atoc').removeClass('active');
        $('.dtof').addClass('active');
        $('.gtoi').removeClass('active');
        $('.jtol').removeClass('active');
        $('.mtoo').removeClass('active');
        $('.ptor').removeClass('active');
        $('.stou').removeClass('active');
        $('.vtoz').removeClass('active');
        $('#list1').hide();
        $('#list2').show();
        $('#list3').hide();
        $('#list4').hide();
        $('#list5').hide();
        $('#list6').hide();
        $('#list7').hide();
        $('#list8').hide();
    }

    else if (list == 'gtoi') {
        $('.atoc').removeClass('active');
        $('.dtof').removeClass('active');
        $('.gtoi').addClass('active');
        $('.jtol').removeClass('active');
        $('.mtoo').removeClass('active');
        $('.ptor').removeClass('active');
        $('.stou').removeClass('active');
        $('.vtoz').removeClass('active');

        $('#list1').hide();
        $('#list2').hide();
        $('#list3').show();
        $('#list4').hide();
        $('#list5').hide();
        $('#list6').hide();
        $('#list7').hide();
        $('#list8').hide();
    }
    else if (list == 'jtol') {
        $('.atoc').removeClass('active');
        $('.dtof').removeClass('active');
        $('.gtoi').removeClass('active');
        $('.jtol').addClass('active');
        $('.mtoo').removeClass('active');
        $('.ptor').removeClass('active');
        $('.stou').removeClass('active');
        $('.vtoz').removeClass('active');
        $('#list1').hide();
        $('#list2').hide();
        $('#list3').hide();
        $('#list4').show();
        $('#list5').hide();
        $('#list6').hide();
        $('#list7').hide();
        $('#list8').hide();
    }
    else if (list == 'mtoo') {
        $('.atoc').removeClass('active');
        $('.dtof').removeClass('active');
        $('.gtoi').removeClass('active');
        $('.jtol').removeClass('active');
        $('.mtoo').addClass('active');
        $('.ptor').removeClass('active');
        $('.stou').removeClass('active');
        $('.vtoz').removeClass('active');
        $('#list1').hide();
        $('#list2').hide();
        $('#list3').hide();
        $('#list4').hide();
        $('#list5').show();
        $('#list6').hide();
        $('#list7').hide();
        $('#list8').hide();
    }

    else if (list == 'ptor') {
        $('.atoc').removeClass('active');
        $('.dtof').removeClass('active');
        $('.gtoi').removeClass('active');
        $('.jtol').removeClass('active');
        $('.mtoo').removeClass('active');
        $('.ptor').addClass('active');
        $('.stou').removeClass('active');
        $('.vtoz').removeClass('active');

        $('#list1').hide();
        $('#list2').hide();
        $('#list3').hide();
        $('#list4').hide();
        $('#list5').hide();
        $('#list6').show();
        $('#list7').hide();
        $('#list8').hide();
    }

    else if (list == 'stou') {
        $('.atoc').removeClass('active');
        $('.dtof').removeClass('active');
        $('.gtoi').removeClass('active');
        $('.jtol').removeClass('active');
        $('.mtoo').removeClass('active');
        $('.ptor').removeClass('active');
        $('.stou').addClass('active');
        $('.vtoz').removeClass('active');

        $('#list1').hide();
        $('#list2').hide();
        $('#list3').hide();
        $('#list4').hide();
        $('#list5').hide();
        $('#list6').hide();
        $('#list7').show();
        $('#list8').hide();
    }

    else if (list == 'vtoz') {
        $('.atoc').removeClass('active');
        $('.dtof').removeClass('active');
        $('.gtoi').removeClass('active');
        $('.jtol').removeClass('active');
        $('.mtoo').removeClass('active');
        $('.ptor').removeClass('active');
        $('.stou').removeClass('active');
        $('.vtoz').addClass('active');

        $('#list1').hide();
        $('#list2').hide();
        $('#list3').hide();
        $('#list4').hide();
        $('#list5').hide();
        $('#list6').hide();
        $('#list7').hide();
        $('#list8').show();
    }
}



