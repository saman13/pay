<form accept-charset="utf-8" method="post" id="chargeform" action="pay.php">
    <fieldset>
        <div class="charge">
            <div class="input text required account">
                <input id="dataAccountTemp" class="input-large cellphone" type="text" value="" maxlength="11" name="data[AccountTemp]">
            </div>
            <div id="AmountTemp" class="input text required amount">
                <input type="text" id="dataAmountTemp" name="data[AmountTemp]" title="مبلغ به تومان" class="eng">
            </div>
            <div id="AmountTopUpMTNTemp" class="input text required amount">
                <input type="text" id="dataAmountTopUpMTNTemp" name="data[AmountMTNTemp]" title="مبلغ به تومان" class="eng">
            </div>
            <div class="input text counter">
                <div class="input text required count">
                    <input type="text" id="count" class="eng">
                </div>
                <div class="amount-container">
                    <span class="amount-title">مبلغ</span>
                    <span class="amount-value"></span>
                    <span class="amount-unit">تومان</span>
                </div>
                <div class="clear"></div>
            </div>
            <div class="input text email">
                <input id="EmailInput" class="input-large" type="email" maxlength="50" value="" title="آدرس ایمیل را به شکل صحیح بنویسید!" rel="tooltip" placeholder="you@domain.com">
            </div>
            <div class="Magiccharge">
                <input type="checkbox" value="1" id="magiccharge" name="data[Magic]">
                <label for="magiccharge">شارژ شگفت انگیز </label>
            </div>
            <div class="NonCreditMTN">
                <input type="checkbox" value="1" id="NonCreditMTN" name="data[NonCreditMTN]">
                <label for="NonCreditMTN">قبض (شارژ) دائمی ایرانسل</label>
            </div>
        </div>
        <div class="payment-gateways">
            <p>درگاه پرداخت: <i></i></p>
            <ul>
                <li id="Parsian" class="bank-Parsian" data-tooltip="پارسیان"></li>
                <li id="Mellat" class="bank-Mellat" data-tooltip="ملت"></li>
                <li id="Saman" class="bank-Saman" data-tooltip="سامان"></li>
                <li id="Melli" class="bank-Melli" data-tooltip="ملی"></li>
                <li id="Fanava" class="bank-Fanava" data-tooltip="فن آوا"></li>
                <li id="Zarinpal" class="bank-Zarinpal" data-tooltip="زرین پال"></li>
            </ul>
            <p class="caution">خرید با کلیه کارت های بانکی عضو شبکه شتاب امکان پذیر می باشد.</p>
        </div>
        <input type="hidden" id="dataWebserviceId" name="data[WebserviceId]">
        <input type="hidden" id="dataRedirectUrl" name="data[RedirectUrl]" value="">
        <input type="hidden" id="dataChargeKind" name="data[ChargeKind]">
        <input type="hidden" id="dataCellphone" name="data[Cellphone]">
        <input type="hidden" id="dataAmount" name="data[Amount]">
        <input type="hidden" id="dataCount" name="data[Count]">
        <input type="hidden" id="dataEmail" name="data[Email]">
        <input type="hidden" id="dataType" name="data[Type]">
        <input type="hidden" id="dataIssuer" name="data[Issuer]">
        <input type="hidden" id="dataRedirectToPage" name="data[RedirectToPage]" value="true">
        <input type="hidden" id="dataRedirectToPage" name="data[ScriptVersion]" value="3">
    </fieldset>
    <div class="submit">
        <input type="submit" value="پــرداخــت">
    </div>
</form>
