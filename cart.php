<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/ClickHudderFax-name.png" type="image/x-icon" />
    <title>ClickHudderFax</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <link rel="stylesheet" type="text/css" href="css/cart.css" />
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  </head>

  <body>
    <?php
include 'header.php';
?>
    <main>
      <div class="max-width-wrapper">
        <div class="cart-outer-wrapper">
          <div id="cart-wrapper" class="cart-items-summary-outer-wrapper">
            <div id="shopping-cart" class="cart-items-summary-wrapper">
              <div class="check-all-carts-wrapper">
                <div class="select-check-wrapper">
                  <label class="select-check-container">
                    Select all items
                    <input id="checkAllCheckbox" type="checkbox" />
                    <span class="checkmark"></span>
                  </label>
                  <div id="main-delete" class="check-all-delte-wrapper">
                    <span
                      class="iconify"
                      data-icon="fluent:delete-20-regular"
                      data-inline="false"
                    ></span>
                    <span>Delete</span>
                  </div>
                </div>
              </div>
              <div class="cart-items-summary-container">
                <div class="cart-items-container">
                  <div class="card-row">
                    <div
                      id="product-1"
                      class="card-col-big"
                      data-product-id="1"
                    >
                      <label class="select-check-container">
                        <input
                          class="each-checkbox"
                          type="checkbox"
                          data-product-id="1"
                          data-product-price="50"
                          data-product-quantity="1"
                          data-product-total="50"
                          data-product-discount="0"
                        />
                        <span class="checkmark"></span>
                      </label>
                      <div class="card-big">
                        <div class="card-img-wrapper">
                          <a href="product.php">
                            <img
                              class="card-big-img"
                              src="images/placeholder-image.png"
                              alt=""
                            />
                          </a>
                        </div>
                        <div class="card-big-body">
                          <div class="card-big-title">
                            <a href="product.php"> Product Title </a>
                            <button class="individual-delete-btn each-delete">
                              <span
                                class="iconify"
                                data-icon="fluent:delete-20-regular"
                                data-inline="false"
                              ></span>
                            </button>
                          </div>
                          <div class="card-key-value-wrapper">
                            <div class="card-key-value-row">
                              <div class="card-key no-key-sm">Price</div>
                              <div class="card-value">
                                <div class="card-big-price each-price">
                                  &pound;50
                                </div>
                              </div>
                            </div>
                            <div class="card-key-value-row cart-trader-name" cl>
                              <div class="card-key">Trader</div>
                              <div class="card-value">
                                <span>Trader Name</span>
                              </div>
                            </div>
                          </div>
                          <div class="quantity-total-wrapper">
                            <div class="quantity-wrapper">
                              <span class="no-key-sm">Quantity</span>
                              <button class="quantity-btn each-subtract">
                                -
                              </button>
                              <span class="quantity each-quantity">1</span>
                              <button class="quantity-btn each-add">+</button>
                            </div>
                            <div class="total-wrapper">
                              <div class="total-text">Total</div>
                              <div class="total-value each-total">
                                &pound;50
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-col-big" data-product-id="2">
                      <label class="select-check-container">
                        <input
                          class="each-checkbox"
                          type="checkbox"
                          data-product-id="2"
                          data-product-price="75"
                          data-product-quantity="2"
                          data-product-total="135"
                          data-product-discount="10"
                        />
                        <span class="checkmark"></span>
                      </label>
                      <div class="card-big">
                        <div class="card-img-wrapper">
                          <a href="product.php">
                            <img
                              class="card-big-img"
                              src="images/placeholder-image.png"
                              alt=""
                            />
                          </a>
                        </div>
                        <div class="card-big-body">
                          <div class="card-big-title">
                            <a href="product.php"> Product Title </a>
                            <button class="individual-delete-btn each-delete">
                              <span
                                class="iconify"
                                data-icon="fluent:delete-20-regular"
                                data-inline="false"
                              ></span>
                            </button>
                          </div>
                          <div class="card-key-value-wrapper">
                            <div class="card-key-value-row">
                              <div class="card-key no-key-sm">Price</div>
                              <div class="card-value">
                                <div class="card-big-price each-price">
                                  &pound;75
                                </div>
                              </div>
                            </div>
                            <div class="card-key-value-row">
                              <div class="card-value">
                                <div class="light-text"><b>10% off</b></div>
                              </div>
                            </div>
                            <div class="card-key-value-row cart-trader-name" cl>
                              <div class="card-key">Trader</div>
                              <div class="card-value">
                                <span class="">Trader Name</span>
                              </div>
                            </div>
                          </div>
                          <div class="quantity-total-wrapper">
                            <div class="quantity-wrapper">
                              <span class="no-key-sm">Quantity</span>
                              <button class="quantity-btn each-subtract">
                                -
                              </button>
                              <span class="quantity each-quantity">2</span>
                              <button class="quantity-btn each-add">+</button>
                            </div>
                            <div class="total-wrapper">
                              <div class="total-text">Total</div>
                              <div class="total-value each-total">
                                &pound;135
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cart-summary-wrapper">
                  <div class="cart-summary-container">
                    <div
                      id="cart-summary"
                      class="cart-summary-heading"
                      data-cart-sub-total="200"
                      data-cart-discount="0"
                      data-cart-grand-total="200"
                    >
                      Order Summary
                    </div>
                    <div class="cart-summary-body">
                      <div class="cart-summary-row">
                        <div class="cart-summary-key">
                          Sub total (<span class="subtotal-items">3</span>
                          items)
                        </div>
                        <div id="cart-sub-total" class="cart-summary-value">
                          &pound;200
                        </div>
                      </div>
                      <div class="cart-summary-voucher-wrapper">
                        <div>Voucher Code</div>
                        <form class="voucher-form" action="#" method="POST">
                          <input type="text" />
                          <button>Apply</button>
                        </form>
                      </div>
                      <div class="cart-summary-row">
                        <div class="cart-summary-key">Discount</div>
                        <div id="cart-discount" class="cart-summary-value">
                          0%
                        </div>
                      </div>
                      <div class="cart-summary-row">
                        <div class="cart-summary-key">Total</div>
                        <div
                          class="cart-summary-value light-text cart-total-price"
                        >
                          &pound;200
                        </div>
                      </div>
                    </div>
                    <div class="card-summary-footer">
                      <button id="proceed-btn" class="cart-proceed">
                        Proceed to Checkout
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="collection-slot" class="cart-items-summary-wrapper">
              <div class="cart-items-summary-container">
                <div class="cart-items-container">
                  <div class="collection-card-wrapper">
                    <div class="slot-header">Slot and Day</div>
                    <div class="collection-container">
                      <div class="collection-row">
                        <div class="collection-title-wrapper">
                          <div class="collection-title-key">
                            <span
                              class="iconify"
                              data-icon="bi:calendar-week"
                              data-inline="false"
                            ></span>
                            Collection Day
                          </div>
                        </div>
                        <div>
                          <div
                            class="slot-item each-collection-day disabled"
                            data-collection-day="Wednesday"
                            data-available-slot=""
                          >
                            <div class="slot-key">
                              <span
                                class="iconify"
                                data-icon="gridicons:product"
                                data-inline="false"
                              ></span>
                              <span>Wednesday</span>
                            </div>
                          </div>
                          <div
                            class="slot-item each-collection-day"
                            data-collection-day="Thursday"
                            data-available-slot="2,3"
                          >
                            <div class="slot-key">
                              <span
                                class="iconify"
                                data-icon="gridicons:product"
                                data-inline="false"
                              ></span>
                              <span>Thursday</span>
                            </div>
                          </div>
                          <div
                            class="slot-item each-collection-day"
                            data-collection-day="Friday"
                            data-available-slot="1,2,3"
                          >
                            <div class="slot-key">
                              <span
                                class="iconify"
                                data-icon="gridicons:product"
                                data-inline="false"
                              ></span>
                              <span>Friday</span>
                            </div>
                          </div>
                        </div>
                        <div
                          id="collection-slot-container"
                          class="collection-slot-container"
                        ></div>
                      </div>
                    </div>
                    <div id="back-collection" class="back-btn">
                      <span
                        class="iconify"
                        data-icon="ic:sharp-arrow-back-ios-new"
                        data-inline="false"
                      ></span>
                      Back
                    </div>
                  </div>
                </div>
                <div class="cart-summary-wrapper">
                  <div class="cart-summary-container">
                    <div
                      class="cart-summary-heading"
                    >
                      Order Summary
                    </div>
                    <div class="cart-summary-body">
                      <div class="cart-summary-row">
                        <div class="cart-summary-value">
                          <span
                            class="iconify collection-summary-icon"
                            data-icon="bx:bx-user"
                            data-inline="false"
                          ></span>
                          <span>Cristiano Ronaldo</span>
                        </div>
                      </div>
                      <div class="cart-summary-row">
                        <div class="cart-summary-value">
                          <span
                            class="iconify collection-summary-icon"
                            data-icon="eva:email-outline"
                            data-inline="false"
                          ></span>
                          <span>cr7@gmail.com</span>
                        </div>
                      </div>
                      <div class="cart-summary-row">
                        <div class="cart-summary-value">
                          <span
                            class="iconify"
                            data-icon="akar-icons:phone"
                            data-inline="false"
                          ></span>
                          <span>+984612355</span>
                        </div>
                      </div>
                      <div class="cart-summary-row">
                        <div class="cart-summary-key">Collection Slot</div>
                        <div class="cart-summary-value">
                          <b class="summary-slot">9:00 - 11:00</b>
                        </div>
                      </div>
                      <div class="cart-summary-row">
                        <div class="cart-summary-key">Collection Day</div>
                        <div class="cart-summary-value">
                          <b class="summary-day">Thursday</b>
                        </div>
                      </div>
                      <div class="cart-summary-row">
                        <div class="cart-summary-key">Total</div>
                        <div
                          class="cart-summary-value light-text cart-total-price"
                        >
                          &pound;200
                        </div>
                      </div>
                    </div>
                    <div class="card-summary-footer">
                      <button
                        id="proceed-slot-btn"
                        class="cart-proceed disabled"
                      >
                        Proceed to Payment
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="payment" class="cart-items-summary-wrapper">
              <div class="cart-items-summary-container">
                <div class="cart-items-container">
                  <div class="payment-card-wrapper">
                    <div class="slot-header">Payment Method</div>
                    <div class="payment-container">
                      <div class="payment-cont-row">
                        <div class="paypal-indicator">
                          <div class="paypal-dot-text">
                            <div class="paypal-dot"></div>
                            <div class="paypal-text">PayPal</div>
                          </div>
                          <div>
                            <img
                              class="sm-paypal-img"
                              src="images/paypal-logo.svg"
                              alt="Paypal-logo"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="payment-cont-row">
                        <div class="paypal-indicator">
                          <div class="paypal-btn-img-wrapper">
                            <div>
                              <img
                                class="lg-paypal-img"
                                src="images/paypal-logo.svg"
                                alt="Paypal-logo"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <label class="select-check-container checkPaymentWrapper">
                          <span>I agree with our terms and conditions and privacy policy</span>
                          <input id="checkPaymentTerms" type="checkbox" />
                          <span class="checkmark paymentCheck"></span>
                        </label>
                      </div>
                      <div class="pay-inform-wrapper">
                        <div class="all-your-data">
                          <span class="iconify" data-icon="carbon:manage-protection" data-inline="false"></span>
                          <span>All your data are safe</span>
                        </div>
                        <div class="pay-note-">
                          Use of world's best Authentication.
                        </div>
                      </div>
                      
                    </div>

                    <div id="back-payment" class="back-btn">
                      <span
                        class="iconify"
                        data-icon="ic:sharp-arrow-back-ios-new"
                        data-inline="false"
                      ></span>
                      Back
                    </div>
                  </div>
                </div>
                <div class="cart-summary-wrapper">
                  <div class="cart-summary-container">
                    <div class="cart-summary-heading">Order Summary</div>
                    <div class="cart-summary-body">
                      <div class="cart-summary-row">
                        <div class="cart-summary-value">
                          <span
                            class="iconify collection-summary-icon"
                            data-icon="bx:bx-user"
                            data-inline="false"
                          ></span>
                          <span>Cristiano Ronaldo</span>
                        </div>
                      </div>
                      <div class="cart-summary-row">
                        <div class="cart-summary-value">
                          <span
                            class="iconify collection-summary-icon"
                            data-icon="eva:email-outline"
                            data-inline="false"
                          ></span>
                          <span>cr7@gmail.com</span>
                        </div>
                      </div>
                      <div class="cart-summary-row">
                        <div class="cart-summary-value">
                          <span
                            class="iconify"
                            data-icon="akar-icons:phone"
                            data-inline="false"
                          ></span>
                          <span>+98456123</span>
                        </div>
                      </div>
                      <div class="cart-summary-row">
                        <div class="cart-summary-key">Collection Slot</div>
                        <div class="cart-summary-value">
                          <b class="summary-slot">9:00 - 11:00</b>
                        </div>
                      </div>
                      <div class="cart-summary-row">
                        <div class="cart-summary-key">Collection Day</div>
                        <div class="cart-summary-value">
                          <b class="summary-day">Thursday</b>
                        </div>
                      </div>
                      <div class="cart-summary-row">
                        <div class="cart-summary-key">Payment Method</div>
                        <div class="cart-summary-value">
                          <b>PayPal</b>
                        </div>
                      </div>
                      <div class="cart-summary-row">
                        <div class="cart-summary-key">Total</div>
                        <div
                          id="cart-total"
                          class="cart-summary-value light-text cart-total-price"
                        >
                          &pound;200
                        </div>
                      </div>
                    </div>
                    <div class="card-summary-footer">
                      <div id="paypal-btn" class="disabled"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="order-success" class="cart-items-summary-wrapper">
              <div class="order-success-container">
                <div class="order-success-details-wrapper">
                  <div class="slot-header">Order success</div>
                  <div class="order-success-details">
                    <div class="cart-summary-row">
                      <div class="cart-summary-value">
                        <span
                          class="iconify collection-summary-icon"
                          data-icon="bx:bx-user"
                          data-inline="false"
                        ></span>
                        <span>Cristiano Ronaldo</span>
                      </div>
                    </div>
                    <div class="cart-summary-row">
                      <div class="cart-summary-value">
                        <span
                          class="iconify collection-summary-icon"
                          data-icon="eva:email-outline"
                          data-inline="false"
                        ></span>
                        <span>cr7@gmail.com</span>
                      </div>
                    </div>
                    <div class="cart-summary-row">
                      <div class="cart-summary-value">
                        <span
                          class="iconify"
                          data-icon="akar-icons:phone"
                          data-inline="false"
                        ></span>
                        <span>+987456123</span>
                      </div>
                    </div>
                    <div class="cart-summary-row">
                      <div class="cart-summary-value">
                        <span class="iconify" data-icon="bx:bx-time" data-inline="false"></span>
                        <span>9:00 - 11:00</span>
                      </div>
                    </div>
                    <div class="cart-summary-row">
                      <div class="cart-summary-value">
                        <span class="iconify" data-icon="bi:calendar-week" data-inline="false"></span>
                        <span>Thursday</span>
                      </div>
                    </div>
                    <div class="cart-summary-row">
                      <div class="cart-summary-value">
                        <span class="iconify" data-icon="fluent:payment-16-filled" data-inline="false"></span>
                        <span>PayPal</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="order-success-items-wrapper">
                  <div class="slot-header">Order Items</div>
                  <div class="order-success-items-container">
                    <div class="bill-row">
                      <div>Bill Number</div>
                      <div>#123456</div>
                    </div>
                    <div class="order-success-products-container">
                      <div class="success-card-row">
                        <div class="success-img-wrapper">
                          <img class="success-prod-img" src="images/placeholder-image.png" alt="">
                        </div>
                        <div class="success-body">
                          <div class="success-body-row">
                            <div class="success-prod-title">Product Name</div>
                            <div class="success-prod-price-quantity">3 x &pound;15.00</div>
                          </div>
                          <div class="success-body-row">
                            <div></div>
                            <div class="success-prod-price-quantity">= &pound;45.00</div>
                          </div>
                        </div>
                      </div>
                      <div class="success-card-row">
                        <div class="success-img-wrapper">
                          <img class="success-prod-img" src="images/placeholder-image.png" alt="">
                        </div>
                        <div class="success-body">
                          <div class="success-body-row">
                            <div class="success-prod-title">Product Name</div>
                            <div class="success-prod-price-quantity">3 x &pound;15.00</div>
                          </div>
                          <div class="success-body-row">
                            <div></div>
                            <div class="success-prod-price-quantity">= &pound;45.00</div>
                          </div>
                        </div>
                      </div>
                      <div class="success-card-row">
                        <div class="success-img-wrapper">
                          <img class="success-prod-img" src="images/placeholder-image.png" alt="">
                        </div>
                        <div class="success-body">
                          <div class="success-body-row">
                            <div class="success-prod-title">Product Name</div>
                            <div class="success-prod-price-quantity">3 x &pound;15.00</div>
                          </div>
                          <div class="success-body-row">
                            <div></div>
                            <div class="success-prod-price-quantity">= &pound;45.00</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="success-prices-summary">
                      <div class="success-price-row">
                        <div>Sub totals (3 items)</div>
                        <div>&pound;45.00</div>
                      </div>
                      <div class="success-price-row">
                        <div>Discount</div>
                        <div>0%</div>
                      </div>
                      <div class="success-price-row">
                        <div>Total</div>
                        <div>&pound;45.00</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php
include 'footer.php';
?>

    <script src="js/header.js"></script>
    <script src="js/cartUtils.js"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=Aafb9cx169gRRW0uWl1LFxzcN1tMib3lpw4sqsf62Mr8QNrKhmKITlaNfD4KYyomq5X-ek6QmPpgOtqU&currency=GBP"></script>
    <script src="js/main-cart.js"></script>
  </body>
</html>
