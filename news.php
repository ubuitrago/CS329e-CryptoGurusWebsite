
<?php include('header.php');?>

<div class="PageBody">
<div class="newsCSS"
    <!-- This dynamic table is updated by fetching articles from News api -->
    <div id="dynocontent">
    <center>
    <h2>Trending News</h2>
        <div >
            <table class="latest">
                <tr>
                    <td><p></p></td>
                    <td><a target= "_blank" href="">
                <img src="" width="215px" height="150px"></a></td>

                    <td class="secCol"><p></p></td>
                        <td><a target= "_blank" href="">
                    <img src="" width="215px" height="150px"></a></td>
                </tr>
                <tr>
                    <td><p></p></td>
                    <td><a target= "_blank" href="">
                <img src="" width="215px" height="150px"></a></td>

                    <td class="secCol"><p></p></td>
                        <td><a target= "_blank" href="">
                    <img src="" width="215px" height="150px"></a></td>
                </tr>
                <tr style="padding-bottom: 25px">
                    <td><p></p></td>
                    <td><a target= "_blank" href="">
                <img src="" width="215px" height="150px"></a></td>

                    <td class="secCol"><p></p></td>
                        <td><a target= "_blank" href="">
                    <img src="" width="215px" height="150px"></a></td>
                </tr>
            </table>
        </div>
        </center>
</div>

<script src="./dynoNews.js"> </script>
<!-- Static table that is curated -->
<div id="statcontent">
    <h2>Editor's Choice</h2>
        <div>
            <table class="edsChoice">
                <tr>
                    <td><p>Bitcoin hailed as 'success' by China in dramatic shift of attitude.
                Country plans to launch its own cryptocurrency next year</p></td>
                    <td><a target= "_blank" href="https://www.independent.co.uk/life-style/gadgets-and-tech/news/bitcoin-china-cryptocurrency-blockchain-price-latest-a9199566.html">
                <img src="chinaFlag.jpg" width="215px" height="150px"></a></td>

                    <td class="secCol"><p>As Regulators Stonewall Libra, Facebook Rolls Out New Payment System</p></td>
                        <td><a target= "_blank" href="https://cointelegraph.com/news/as-regulators-stonewall-libra-facebook-rolls-out-new-payment-system">
                    <img src="libra.jpg" width="215px" height="150px"></a></td>
                </tr>
                <tr>
                    <td><p>This Blockchain-Based Social Media Network Is The First Apple Pay Approved DApp</p></td>
                    <td><a target= "_blank" href="https://cointelegraph.com/news/this-blockchain-based-social-media-network-is-the-first-apple-pay-approved-dapp">
                <img src="pepo.jpg" width="215px" height="150px"></a></td>

                    <td class="secCol"><p>Thieves targeted crypto execs and threatened their families in wide-ranging scheme, says DOJ</p></td>
                        <td><a target= "_blank" href="https://www.cnbc.com/2019/11/14/thieves-targeted-crypto-execs-threatened-their-families-doj.html">
                    <img src="cnbc.jpg" width="215px" height="150px"></a></td>
                </tr>
                <tr style="padding-bottom: 25px">
                    <td><p>This cryptocurrency exchange was actually a $384 million Ponzi scheme</p></td>
                    <td><a target= "_blank" href="https://thenextweb.com/hardfork/2019/11/13/south-korea-coinup-cryptocurrency-exchange-ponzi-pyramid-scheme-fraud-ceo-jail/">
                <img src="ponzi.jpeg" width="215px" height="150px"></a></td>

                    <td class="secCol"><p>Bitcoin No Longer Seen as the Driving Force in Crypto Market</p></td>
                        <td><a target= "_blank" href="https://www.bloomberg.com/news/articles/2019-10-11/bitcoin-no-longer-seen-as-the-driving-force-in-crypto-market">
                    <img src="bi.jpg" width="215px" height="150px"></a></td>
                </tr>
            </table>
        </div>
</div>
</div>
</div>
<?php include('footer.php');?>