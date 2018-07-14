<html>
<head>
        <meta charset="utf-8">
 
        <title>Layout Blog - Freetuts.net</title>
 
<!-- Latest compiled and minified CSS -->
<?php include 'snippet/layout.php';?>

  <link rel="stylesheet" type="text/css" href="css/general.css">
</head>
    <body>
        <?php include 'snippet/menu.php';?>

            <div class="container-fluid">
                <div class="row">
                    <?php include 'snippet/leftmenu.php';?>
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 document">
                        <form class="ui form">
                          <h4 class="ui dividing header">Shipping Information</h4>
                          <div class="field">
                            <label>Name</label>
                            <div class="two fields">
                              <div class="field">
                                <input type="text" name="shipping[first-name]" placeholder="First Name">
                              </div>
                              <div class="field">
                                <input type="text" name="shipping[last-name]" placeholder="Last Name">
                              </div>
                            </div>
                          </div>
                          <div class="field">
                            <label>Billing Address</label>
                            <div class="fields">
                              <div class="twelve wide field">
                                <input type="text" name="shipping[address]" placeholder="Street Address">
                              </div>
                              <div class="four wide field">
                                <input type="text" name="shipping[address-2]" placeholder="Apt #">
                              </div>
                            </div>
                          </div>
                          <div class="two fields">
                            <div class="field">
                              <label>State</label>
                              <select class="ui fluid dropdown">
                                <option value="">State</option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                              </select>
                            </div>
                            <div class="field">
                              <label>Country</label>
                              <div class="ui fluid search selection dropdown">
                                <input type="hidden" name="country">
                                <i class="dropdown icon"></i>
                                <div class="default text">Select Country</div>
                                <div class="menu">
                            <div class="item" data-value="af"><i class="af flag"></i>Afghanistan</div>
                          </div>
                               </div>
                            </div>
                          </div>
                          <h4 class="ui dividing header">Billing Information</h4>
                          <div class="field">
                            <label>Card Type</label>
                            <div class="ui selection dropdown">
                              <input type="hidden" name="card[type]">
                              <div class="default text">Type</div>
                              <i class="dropdown icon"></i>
                              <div class="menu">
                                <div class="item" data-value="visa">
                                  <i class="visa icon"></i>
                                  Visa
                                </div>
                                <div class="item" data-value="amex">
                                  <i class="amex icon"></i>
                                  American Express
                                </div>
                                <div class="item" data-value="discover">
                                  <i class="discover icon"></i>
                                  Discover
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="fields">
                            <div class="seven wide field">
                              <label>Card Number</label>
                              <input type="text" name="card[number]" maxlength="16" placeholder="Card #">
                            </div>
                            <div class="three wide field">
                              <label>CVC</label>
                              <input type="text" name="card[cvc]" maxlength="3" placeholder="CVC">
                            </div>
                            <div class="six wide field">
                              <label>Expiration</label>
                              <div class="two fields">
                                <div class="field">
                                  <select class="ui fluid search dropdown" name="card[expire-month]">
                                    <option value="">Month</option>
                                    <option value="1">January</option>
                                  </select>
                                </div>
                                <div class="field">
                                  <input type="text" name="card[expire-year]" maxlength="4" placeholder="Year">
                                </div>
                              </div>
                            </div>
                          </div>
                           <h4 class="ui dividing header">Receipt</h4>
                           <div class="field">
                            <label>Send Receipt To:</label>
                            <div class="ui fluid multiple search selection dropdown">
                              <input type="hidden" name="receipt">
                              <i class="dropdown icon"></i>
                              <div class="default text">Saved Contacts</div>
                              <div class="menu">
                                <div class="item" data-value="jenny" data-text="Jenny">
                                  <img class="ui mini avatar image" src="/images/avatar/small/jenny.jpg">
                                  Jenny Hess
                                </div>
                                <div class="item" data-value="elliot" data-text="Elliot">
                                  <img class="ui mini avatar image" src="/images/avatar/small/elliot.jpg">
                                  Elliot Fu
                                </div>
                              </div>
                            </div>
                          </div>
                           <div class="ui segment">
                            <div class="field">
                              <div class="ui toggle checkbox">
                                <input type="checkbox" name="gift" tabindex="0" class="hidden">
                                <label>Do not include a receipt in the package</label>
                              </div>
                            </div>
                          </div>
                          <div class="ui button" tabindex="0">Submit Order</div>
                        </form>
        </div>
    </div>
</div>
</html>