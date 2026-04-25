<?php include 'includes/header.php'; ?>
<section class="check_mainsec">
    <!-- Vheckout Section 1 -->
    <section class="check_s1">
        <div class="check_c1 container">
            <h1 class="check_s1title">Checkout</h1>
            <p class="check_s1subtitle">Enter your details below.</p>
        </div>
    </section>
    <!-- Checkout Section 2 -->
    <section class="check_s2">
        <div class="check_c2 container">
            <div class="check_c2left">
                <p class="check_lformtitle">Checkout Information</p>
                <div class="check_form">
                    <input type="text" class="form-control check_textbox" id="" placeholder="Full Name">
                    <div class="check_firstlast">
                        <input type="text" class="form-control check_textbox" id="" placeholder="Email Address">
                        <input type="text" class="form-control check_textbox" id="" placeholder="Phone number">
                    </div>
                    <input type="text" class="form-control check_textbox" id="" placeholder="Address line 1">
                    <div class="check_firstlast">
                        <input type="text" class="form-control check_textbox" id="" placeholder="Zip / Postal Code">
                        <input type="text" class="form-control check_textbox" id="" placeholder="City / town">
                    </div>
                    <input type="text" class="form-control check_textbox" id="" placeholder="Country">
                    <input type="text" class="form-control check_textbox" id="" placeholder="Discount Code">
                    <div class="check_firstlast">
                        <div class="c-checkboxR">
                            <div class="c-divR">
                                <label class="d-flex justify-content-center justify-content-lg-start">
                                    <input type="checkbox" id="terms" name="terms">
                                    <label for="terms"></label>
                                </label>
                            </div>
                            <div class="c-textR">
                                <span class="login_strongR">I agree to the
                                    <a href="" class="link_re_globalR">Terms & Conditions</a>
                                </span>
                            </div>
                        </div>
                        <button type="button" class="btn check_btn">Proceed to Payment</button>
                    </div>
                </div>
            </div>
            <div class="check_c2right">
                <div class="check_c2righttop">
                    <p class="check_c2righttitlegreen">Total amount</p>
                    <h2 class="check_c2righttitleamount">$120</h2>
                </div>
                <div class="check_c2rightmid1 w-100">
                    <div class="check_c2rightmid1card">
                        <div class="check_c2rightmid1cardleft w-100">
                            <img src="./img/check_c1.svg">
                            <div class="check_cardtitlebar">
                                <p class="check_cardtitle">United Arab Emirates</p>
                                <div class="checkcard_plandescbar">
                                    <div class="checkcard_plandesc">
                                        <img src="./img/data_icon.svg">
                                        <p class="checkcard_plantext">20 GB</p>
                                    </div>
                                    <div class="checkcard_plandesc">
                                        <img src="./img/duration_icon.png">
                                        <p class="checkcard_plantext">30 days</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="check_c2rightmid1cardright">
                            <p class="check_c2rightmid1cardamount">50$</p>
                            <button type="button" class="btn carddelete"><img src="./img/carddelete.svg"></button>
                        </div>
                    </div>
                    <div class="check_c2rightmid1card">
                        <div class="check_c2rightmid1cardleft w-100">
                            <img src="./img/check_c2.svg">
                            <div class="check_cardtitlebar">
                                <p class="check_cardtitle">United Kingdom</p>
                                <div class="checkcard_plandescbar">
                                    <div class="checkcard_plandesc">
                                        <img src="./img/data_icon.svg">
                                        <p class="checkcard_plantext">10 GB</p>
                                    </div>
                                    <div class="checkcard_plandesc">
                                        <img src="./img/duration_icon.png">
                                        <p class="checkcard_plantext">7 days</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="check_c2rightmid1cardright">
                            <p class="check_c2rightmid1cardamount">20$</p>
                            <button type="button" class="btn carddelete"><img src="./img/carddelete.svg"></button>
                        </div>
                    </div>
                    <div class="check_c2rightmid1card">
                        <div class="check_c2rightmid1cardleft w-100">
                            <img src="./img/check_c3.svg">
                            <div class="check_cardtitlebar">
                                <p class="check_cardtitle">Brazil</p>
                                <div class="checkcard_plandescbar">
                                    <div class="checkcard_plandesc">
                                        <img src="./img/data_icon.svg">
                                        <p class="checkcard_plantext">20 GB</p>
                                    </div>
                                    <div class="checkcard_plandesc">
                                        <img src="./img/duration_icon.png">
                                        <p class="checkcard_plantext">30 days</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="check_c2rightmid1cardright">
                            <p class="check_c2rightmid1cardamount">50$</p>
                            <button type="button" class="btn carddelete"><img src="./img/carddelete.svg"></button>
                        </div>
                    </div>
                </div>
                <div class="check_c2rightmid2 w-100">
                    <div class="check_c2rightmid2row">
                        <p class="check_c2subtotal">Sub total</p>
                        <p class="check_c2subtotal">25$</p>
                    </div>
                    <div class="check_c2rightmid2line"></div>
                    <div class="check_c2rightmid2row">
                        <p class="check_c2subtotalgreen">Coupon Discount</p>
                        <p class="check_c2subtotalgreen">-10$</p>
                    </div>
                    <div class="check_c2rightmid2line"></div>
                    <div class="check_c2rightmid2row">
                        <p class="check_c2subtotal"><b>Total</b></p>
                        <p class="check_c2subtotal"><b>120$</b></p>
                    </div>
                </div>
                <img src="./img/mastercard.png">
            </div>
        </div>
    </section>
</section>
<?php include 'includes/footer.php'; ?>