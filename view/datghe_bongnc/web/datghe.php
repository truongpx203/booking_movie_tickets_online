<style>
    /*
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
*/

    /*--reset--*/
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800&amp;display=swap');

    body {
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
        font-style: normal;
        font-size: 14px;
        color: #bcbcbc;
    }

    html,
    body,
    div,
    span,
    applet,
    object,
    iframe,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    blockquote,
    pre,
    a,
    abbr,
    acronym,
    address,
    big,
    cite,
    code,
    del,
    dfn,
    em,
    img,
    ins,
    kbd,
    q,
    s,
    samp,
    small,
    strike,
    strong,
    sub,
    sup,
    tt,
    var,
    b,
    u,
    i,
    dl,
    dt,
    dd,
    ol,
    nav ul,
    nav li,
    fieldset,
    form,
    label,
    legend,
    table,
    caption,
    tbody,
    tfoot,
    thead,
    tr,
    th,
    td,
    article,
    aside,
    canvas,
    details,
    embed,
    figure,
    figcaption,
    footer,
    header,
    hgroup,
    menu,
    nav,
    output,
    ruby,
    section,
    summary,
    time,
    mark,
    audio,
    video {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        /* vertical-align: baseline; */
    }

    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section {
        display: block;
    }

    ol,
    ul {
        list-style: none;
        margin: 0px;
        padding: 0px;
    }

    blockquote,
    q {
        quotes: none;
    }

    blockquote:before,
    blockquote:after,
    q:before,
    q:after {
        content: '';
        content: none;
    }

    table {
        display: table;
        border-collapse: separate;
        border-spacing: 2px;
        border-color: grey;
    }

    td {
        width: 40px;
        font-weight: 600;
        font-size: 1em;
        padding-top: 7px;
        height: 24px;
        color: #fff;
    }

    /*--start editing from here--*/

    a {
        text-decoration: none;
    }

    .txt-rt {
        text-align: right;
    }

    /* text align right */

    .txt-lt {
        text-align: left;
    }

    /* text align left */

    .txt-center {
        text-align: center;
    }

    /* text align center */

    .float-rt {
        float: right;
    }

    /* float right */

    .float-lt {
        float: left;
    }

    /* float left */

    .clearfix {
        clear: both;
    }

    /* clear float */

    .pos-relative {
        position: relative;
    }

    /* Position Relative */

    .pos-absolute {
        position: absolute;
    }

    /* Position Absolute */

    .vertical-base {
        vertical-align: baseline;
    }

    /* vertical align baseline */

    .vertical-top {
        vertical-align: top;
    }

    /* vertical align top */

    nav.vertical ul li {
        display: block;
    }

    /* vertical menu */

    nav.horizontal ul li {
        display: inline-block;
    }

    /* horizontal menu */

    img {
        max-width: 100%;
    }

    /*--end reset--*/

    button.w3l-cart {
        transition: 0.5s all;
        -webkit-transition: 0.5s all;
        -moz-transition: 0.5s all;
        -o-transition: 0.5s all;
        -ms-transition: 0.5s all;
        text-decoration: none;
        outline: none;
    }

    body a:hover {
        text-decoration: none;
    }

    .clearfix {
        clear: both;
    }

    /* content */

    body {
        background: url(view/datghe_bongnc/web/images/banner.jpg) no-repeat center;
        background-size: cover;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        -ms-background-size: cover;
        background-attachment: fixed;
        /* font-family: 'Source Sans Pro', sans-serif; */
        font-family: 'Poppins', sans-serif;
    }

    .mr_agilemain span {
        color: #f00;
    }

    .w3ls-reg {
        font-family: 'Source Sans Pro', sans-serif;
        width: 700px;
        margin: 0 5vw;
        background: rgba(128, 128, 128, 0.34);
        padding: 3.5vw;
        box-sizing: border-box;
        display: flex;
        display: -webkit-flex;
        flex-wrap: wrap;
    }

    .contaicon {
        display: -webkit-flex;
        display: -webkit-box;
        display: -moz-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: center;
        align-items: center;
        -webkit-box-pack: center;
        -moz-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        padding: 100px 0;
    }

    h1 {
        font-size: 2.9em;
        text-transform: uppercase;
        color: #fff;
        font-weight: 600;
        text-shadow: 4px 3px 1px rgba(0, 0, 0, 0.22);
        letter-spacing: 2px;
        text-align: center;
        margin: 0.8em 1vw .9em;
        font-family: 'Poppins', sans-serif;
    }

    h2 {
        color: #ff9800;
        text-transform: capitalize;
        margin-bottom: 25px;
        font-size: 1em;
        letter-spacing: 0.5px;
        line-height: 1.7;
    }

    .mr_agilemain {
        display: flex;
        justify-content: space-between;
        width: 100%;
    }

    .agileits-left {
        flex-basis: 60%;
        margin-bottom: 1.5em;
    }

    li.smallBox {
        text-align: left;
        display: inline-block;
        margin-right: 1em;
        color: #fff;
    }

    .agileits-right {
        flex-basis: 40%;
        margin-bottom: 1.5em;
    }

    .tw {
        width: 50%;
    }

    label {
        font-size: 1em;
        color: #fff;
        font-weight: 600;
    }

    input[type="text"],
    input[type="number"] {
        padding: 1em;
        width: 80%;
        background: transparent;
        border: 1px solid #888686;
        font-family: 'Poppins', sans-serif;
        font-size: 1em;
        margin-top: 10px;
        color: #fff;
    }

    button {
        background: #f5f5f5;
        border: none;
        color: #000;
        font-weight: 600;
        padding: 8px 20px;
        border-radius: 10px;
        font-size: 1em;
        letter-spacing: 1px;
        font-family: 'Poppins', sans-serif;
        cursor: pointer;
    }

    ul.seat_w3ls {
        margin: 2em 0;
    }

    .screen {
        width: 100%;
        background: #fff;
        /* opacity: 0.5; */
        margin: 1em 6px;
    }

    .wthree {
        background: #12151e none repeat scroll 0 0;
        border: 2px solid #e4d804;
    }

    h2.wthree {
        padding: 0.8em;
        font-size: 1.2em;
        color: #ffffff;
        text-transform: uppercase;
        font-weight: 600;
        letter-spacing: 7px;
        word-spacing: 10px;
    }

    .smallBox::before {
        content: "";
        width: 15px;
        height: 15px;
        display: inline-block;
        margin-right: 10px;
    }

    .greenBox::before {
        content: "";
        background: Green;
    }

    .redBox::before {
        content: "";
        background: Red;
    }

    .emptyBox::before {
        content: "";
        box-shadow: inset 0px 2px 3px 0px rgb(255, 152, 0), 0px 1px 0px 0px rgba(255, 255, 255, .8);
        -moz-box-shadow: inset 0px 2px 3px 0px rgb(255, 152, 0), 0px 1px 0px 0px rgba(255, 255, 255, .8);
        -webkit-box-shadow: inset 0px 2px 3px 0px rgb(255, 152, 0), 0px 1px 0px 0px rgba(255, 255, 255, .8);
        background-color: #fff;
    }

    .seats {
        border: 1px solid red;
        background: yellow;
    }

    .seatGap {
        width: 40px;
    }

    .seatVGap {
        height: 40px;
    }

    table {
        text-align: center;
    }

    .Displaytable {
        text-align: center;
    }

    .Displaytable td,
    .Displaytable th {
        width: 100%;
        padding: 7px 10px;
        color: #000;
        font-weight: 600;
    }

    table.Displaytable tr {
        background: #fff;
        color: #fff;
    }

    textarea {
        border: none;
        background: transparent;
        resize: none;
    }

    input[type=checkbox] {
        width: 13px;
        margin-right: 14px;
        cursor: pointer;
    }

    input[type=checkbox]:before {
        content: "";
        width: 25px;
        height: 18px;
        border-radius: 5px;
        /* Safari 3-4, iOS 1-3.2, Android 1.6- */
        -webkit-border-radius: 5px;
        /* Firefox 1-3.6 */
        -moz-border-radius: 5px;
        display: inline-block;
        /* vertical-align: middle; */
        text-align: center;
        border: 3px solid #ff9800;
        box-shadow: inset 0px 2px 3px 0px rgba(0, 0, 0, .3), 0px 1px 0px 0px rgba(255, 255, 255, .8);
        -moz-box-shadow: inset 0px 2px 3px 0px rgba(0, 0, 0, .3), 0px 1px 0px 0px rgba(255, 255, 255, .8);
        -webkit-box-shadow: inset 0px 2px 3px 0px rgba(0, 0, 0, .3), 0px 1px 0px 0px rgba(255, 255, 255, .8);
        background-color: #ffffff;
    }

    <?php
    foreach ($list_ghe as $ghe) {
        if ($ghe['trang_thai'] == 1) {
            $ten_ghe = $ghe['ten_ghe'];
            echo "input[type=checkbox].seats_$ten_ghe:checked:before {
                    background-color: red;
                    font-size: 15px;
                }";
        }
    }
    ?>input[type=checkbox].seats:checked:before {
        background-color: green;
        font-size: 15px;
    }

    .copy-wthree p {
        color: #fff;
        font-size: 15px;
        letter-spacing: 1px;
        font-weight: 600;
        line-height: 1.7;
        padding: 0 1em;
    }

    .copy-wthree p a {
        color: #fff;
    }

    .copy-wthree {
        margin: 3em 0em;
        text-align: center;
    }

    .displayerBoxes {
        margin-top: 2em;
    }

    /*--responsive--*/

    @media(max-width:1920px) {
        h1 {
            font-size: 3.5vw;
        }
    }

    @media(max-width:1024px) {
        h1 {
            font-size: 4.5vw;
        }
    }

    @media(max-width:800px) {
        h1 {
            font-size: 5vw;
        }
    }

    @media(max-width:667px) {
        h2.wthree {
            padding: 0.7em;
            font-size: 1em;
        }
    }

    @media(max-width:600px) {
        .w3ls-reg {
            width: 500px;
        }
    }

    @media(max-width:568px) {
        .mr_agilemain {
            display: block;
        }

        input[type="text"],
        input[type="number"] {
            padding: 10px 15px;
            width: 100%;
        }
    }

    @media(max-width:480px) {
        .w3ls-reg {
            width: 450px;
        }

        h1 {
            font-size: 2.5em;
        }

        .w3ls-login form {
            padding: 7.5vw;
        }
    }

    @media(max-width:440px) {
        h1 {
            font-size: 2.3em;
        }
    }

    @media(max-width:414px) {
        h1 {
            font-size: 2em;
        }

        .w3ls-reg {
            width: 370px;
        }

        input[type="text"],
        input[type="number"] {
            width: 92%;
        }

        li.smallBox {
            margin: 1em 0 0;
            display: block;
        }
    }

    @media(max-width:384px) {
        h1 {
            font-size: 1.9em;
        }

        .w3ls-reg {
            width: 350px;
        }

        h2.wthree {
            padding: 0.5em;
        }
    }

    @media(max-width:320px) {
        h1 {
            font-size: 1.5em;
        }

        .w3ls-reg {
            width: 280px;
        }

        input[type="text"],
        input[type="number"] {
            width: 88%;
        }

        h2.wthree {
            font-size: 0.95em;
            letter-spacing: 5px;
        }

        .copy-wthree p {
            padding: 0 0.5em;
        }
    }

    .chonve p {
        padding: 5px 20px;
    }

    .btn_submit:hover {
        background-color: #e4d804;
    }

    .btn_submit {
        margin-top: 60px;
    }

    .input_chon {
        background: #f5f5f5;
        border: none;
        color: #000;
        font-weight: 600;
        padding: 8px 20px;
        border-radius: 10px;
        font-size: 1em;
        letter-spacing: 1px;
    }

    .input_chon:hover {
        background-color: #e4d804;
        transition: all 0.3s ease 0s;
    }

    /*--//responsive--*/
</style>

<?php
if (isset($_SESSION['my_ticket']) && count($_SESSION['my_ticket']) != 0) {
    // print_r($_SESSION['my_ticket']);
    // print_r($_SESSION['my_seat']);
?>
    <h1></h1>
    <div class="contaicon">
        <div class="muccon">
        </div>
        <div class="w3ls-reg">
            <h2 style="text-align: center; font-size: 30px; font-weight: bold; height: 50px; color: #ffffff;">Chọn ghế</h2>
            <div class="inputForm">
                <p style="padding-top: 10px;">Vui lòng chọn ghế trong sơ đồ ghế phía dưới. Nếu bạn muốn chọn loại ghế khác hoặc thay đổi số lượng vé muốn mua vui lòng quay lại bước "Chọn Vé" ở thanh công cụ bên trên để quay trở lại màn hình chọn.</p>
                <br>
            </div>
            <ul class="seat_w3ls" style="margin-left: 18%;">
                <li class="smallBox greenBox">Ghế đang chọn</li>

                <li class="smallBox redBox">Ghế đã bán</li>

                <li class="smallBox emptyBox">Ghế trống</li>
            </ul>
            <form action="index.php?act=dat_ghe" method="post">
                <div class="seatStructure txt-center" style="padding: 0 18px;">
                    <div class="screen">
                        <h2 class="wthree">Screen this way</h2>
                    </div>
                    <table id="seatsBlock">
                        <p id="notification"></p>
                        <tr>
                            <td></td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                            <td>9</td>
                            <td>10</td>
                            <td>11</td>
                            <td>12</td>
                        </tr>
                        <tr>
                            <td>A</td>
                            <?php
                            foreach ($show_hang_ghe_A as $ghe_A) {

                            ?>
                                <td>
                                    <input type="checkbox" name="<?php echo $ghe_A['ten_ghe'] ?>" <?php if ($ghe_A['trang_thai'] == 1) echo 'style="pointer-events: none;" checked class=seats_' . $ghe_A['ten_ghe'];
                                                                                                    else echo 'class=seats' ?> value="<?php echo $ghe_A['ten_ghe'] ?>">
                                    <input type="hidden" name="gia_<?php echo $ghe_A['ten_ghe'] ?>" value="<?php echo $ghe_A['gia'] ?>">
                                    <input type="hidden" name="id_<?php echo $ghe_A['id_ghe'] ?>" value="<?php echo $ghe_A['id_ghe'] ?>">
                                </td>
                            <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <td>B</td>
                            <?php
                            foreach ($show_hang_ghe_B as $ghe_B) {
                            ?>
                                <td>
                                    <input type="checkbox" name="<?php echo $ghe_B['ten_ghe'] ?>" <?php if ($ghe_B['trang_thai'] == 1) echo 'style="pointer-events: none;" checked class=seats_' . $ghe_B['ten_ghe'];
                                                                                                    else echo 'class=seats' ?> value="<?php echo $ghe_B['ten_ghe'] ?>">
                                    <input type="hidden" name="gia_<?php echo $ghe_B['ten_ghe'] ?>" class="seats" value="<?php echo $ghe_B['gia'] ?>">
                                    <input type="hidden" name="id_<?php echo $ghe_B['id_ghe'] ?>" class="seats" value="<?php echo $ghe_B['id_ghe'] ?>">
                                </td>
                            <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <td>C</td>
                            <?php
                            foreach ($show_hang_ghe_C as $ghe_C) {
                            ?>
                                <td>
                                    <input type="checkbox" name="<?php echo $ghe_C['ten_ghe'] ?>" <?php if ($ghe_C['trang_thai'] == 1) echo 'style="pointer-events: none;" checked class=seats_' . $ghe_C['ten_ghe'];
                                                                                                    else echo 'class=seats' ?> value="<?php echo $ghe_C['ten_ghe'] ?>">
                                    <input type="hidden" name="gia_<?php echo $ghe_C['ten_ghe'] ?>" value="<?php echo $ghe_C['gia'] ?>">
                                    <input type="hidden" name="id_<?php echo $ghe_C['id_ghe'] ?>" value="<?php echo $ghe_C['id_ghe'] ?>">
                                </td>
                            <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <td>D</td>
                            <?php
                            foreach ($show_hang_ghe_D as $ghe_D) {
                            ?>
                                <td>
                                    <input type="checkbox" name="<?php echo $ghe_D['ten_ghe'] ?>" <?php if ($ghe_D['trang_thai'] == 1) echo 'style="pointer-events: none;" checked class=seats_' . $ghe_D['ten_ghe'];
                                                                                                    else echo 'class=seats' ?> value="<?php echo $ghe_D['ten_ghe'] ?>">
                                    <input type="hidden" name="gia_<?php echo $ghe_D['ten_ghe'] ?>" class="seats" value="<?php echo $ghe_D['gia'] ?>">
                                    <input type="hidden" name="id_<?php echo $ghe_D['id_ghe'] ?>" class="seats" value="<?php echo $ghe_D['id_ghe'] ?>">
                                </td>
                            <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <td>E</td>
                            <?php
                            foreach ($show_hang_ghe_E as $ghe_E) {
                            ?>
                                <td>
                                    <input type="checkbox" name="<?php echo $ghe_E['ten_ghe'] ?>" <?php if ($ghe_E['trang_thai'] == 1) echo 'style="pointer-events: none;" checked class=seats_' . $ghe_E['ten_ghe'];
                                                                                                    else echo 'class=seats' ?> value="<?php echo $ghe_E['ten_ghe'] ?>">
                                    <input type="hidden" name="gia_<?php echo $ghe_E['ten_ghe'] ?>" class="seats" value="<?php echo $ghe_E['gia'] ?>">
                                    <input type="hidden" name="id_<?php echo $ghe_E['id_ghe'] ?>" class="seats" value="<?php echo $ghe_E['id_ghe'] ?>">
                                </td>
                            <?php
                            }
                            ?>
                        </tr>
                        <tr class="seatVGap"></tr>
                        <tr>
                            <td>F</td>
                            <?php
                            foreach ($show_hang_ghe_F as $ghe_F) {
                            ?>
                                <td>
                                    <input type="checkbox" name="<?php echo $ghe_F['ten_ghe'] ?>" <?php if ($ghe_F['trang_thai'] == 1) echo 'style="pointer-events: none;" checked class=seats_' . $ghe_F['ten_ghe'];
                                                                                                    else echo 'class=seats' ?> value="<?php echo $ghe_F['ten_ghe'] ?>">
                                    <input type="hidden" name="gia_<?php echo $ghe_F['ten_ghe'] ?>" class="seats" value="<?php echo $ghe_F['gia'] ?>">
                                    <input type="hidden" name="id_<?php echo $ghe_F['id_ghe'] ?>" class="seats" value="<?php echo $ghe_F['id_ghe'] ?>">
                                </td>
                            <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <td>G</td>
                            <?php
                            foreach ($show_hang_ghe_G as $ghe_G) {
                            ?>
                                <td>
                                    <input type="checkbox" name="<?php echo $ghe_G['ten_ghe'] ?>" <?php if ($ghe_G['trang_thai'] == 1) echo 'style="pointer-events: none;" checked class=seats_' . $ghe_G['ten_ghe'];
                                                                                                    else echo 'class=seats' ?> value="<?php echo $ghe_G['ten_ghe'] ?>">
                                    <input type="hidden" name="gia_<?php echo $ghe_G['ten_ghe'] ?>" class="seats" value="<?php echo $ghe_G['gia'] ?>">
                                    <input type="hidden" name="id_<?php echo $ghe_G['id_ghe'] ?>" class="seats" value="<?php echo $ghe_G['id_ghe'] ?>">
                                </td>
                            <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <td>H</td>
                            <?php
                            foreach ($show_hang_ghe_H as $ghe_H) {
                            ?>
                                <td>
                                    <input type="checkbox" name="<?php echo $ghe_H['ten_ghe'] ?>" <?php if ($ghe_H['trang_thai'] == 1) echo 'style="pointer-events: none;" checked class=seats_' . $ghe_H['ten_ghe'];
                                                                                                    else echo 'class=seats' ?> value="<?php echo $ghe_H['ten_ghe'] ?>">
                                    <input type="hidden" name="gia_<?php echo $ghe_H['ten_ghe'] ?>" class="seats" value="<?php echo $ghe_H['gia'] ?>">
                                    <input type="hidden" name="id_<?php echo $ghe_H['id_ghe'] ?>" class="seats" value="<?php echo $ghe_H['id_ghe'] ?>">
                                </td>
                            <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <td>I</td>
                            <?php
                            foreach ($show_hang_ghe_I as $ghe_I) {
                            ?>
                                <td>
                                    <input type="checkbox" name="<?php echo $ghe_I['ten_ghe'] ?>" <?php if ($ghe_I['trang_thai'] == 1) echo 'style="pointer-events: none;" checked class=seats_' . $ghe_I['ten_ghe'];
                                                                                                    else echo 'class=seats' ?> value="<?php echo $ghe_I['ten_ghe'] ?>">
                                    <input type="hidden" name="gia_<?php echo $ghe_I['ten_ghe'] ?>" class="seats" value="<?php echo $ghe_I['gia'] ?>">
                                    <input type="hidden" name="id_<?php echo $ghe_I['id_ghe'] ?>" class="seats" value="<?php echo $ghe_I['id_ghe'] ?>">
                                </td>
                            <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <td>J</td>
                            <?php
                            foreach ($show_hang_ghe_J as $ghe_J) {
                            ?>
                                <td>
                                    <input type="checkbox" name="<?php echo $ghe_J['ten_ghe'] ?>" <?php if ($ghe_J['trang_thai'] == 1) echo 'style="pointer-events: none;" checked class=seats_' . $ghe_J['ten_ghe'];
                                                                                                    else echo 'class=seats' ?> value="<?php echo $ghe_J['ten_ghe'] ?>">
                                    <input type="hidden" name="gia_<?php echo $ghe_J['ten_ghe'] ?>" class="seats" value="<?php echo $ghe_J['gia'] ?>">
                                    <input type="hidden" name="id_<?php echo $ghe_J['id_ghe'] ?>" class="seats" value="<?php echo $ghe_J['id_ghe'] ?>">
                                </td>
                            <?php
                            }
                            ?>
                        </tr>
                    </table>

                </div>
                <input class="input_chon d-none" id="chon_ghe" name="btn_dat_ghe" type="submit" value="Xác nhận" style="margin-top: 80px;"></input>
            </form>

        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('input[type=checkbox]').on('click', function() {
                if ($('input[type=checkbox]:checked').length > 0) {
                    $('#chon_ghe').removeClass('d-none');
                } else {
                    $('#chon_ghe').addClass('d-none');
                }
            });
        });
    </script>
<?php
} else {
    header('Location:index.php');
}

?>