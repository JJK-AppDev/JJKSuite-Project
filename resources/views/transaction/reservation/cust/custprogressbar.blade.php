<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card shadow-sm">
            <div class="card-body">
                <ul class="progress-indicator m-4">
                    <li
                        class="{{ Route::currentRouteName() == 'transaction.reservation.cust.edit' ? 'completed' : '' }} {{ Route::currentRouteName() == 'transaction.reservation.cust.pickFromCustomer' ? 'completed' : '' }} {{ Route::currentRouteName() == 'transaction.reservation.cust.viewCountPerson' ? 'completed' : '' }} {{ Route::currentRouteName() == 'transaction.reservation.cust.chooseRoom' ? 'completed' : '' }} {{ Route::currentRouteName() == 'transaction.reservation.cust.confirmation' ? 'completed' : '' }} {{ Route::currentRouteName() == 'transaction.reservation.cust.payDownPayment' ? 'completed' : '' }}">
                        <span class="bubble"></span> Profile Confirmation
                    </li>
                    <li
                        class="{{ Route::currentRouteName() == 'transaction.reservation.cust.viewCountPerson' ? 'completed' : '' }} {{ Route::currentRouteName() == 'transaction.reservation.cust.chooseRoom' ? 'completed' : '' }} {{ Route::currentRouteName() == 'transaction.reservation.cust.confirmation' ? 'completed' : '' }} {{ Route::currentRouteName() == 'transaction.reservation.cust.payDownPayment' ? 'completed' : '' }}">
                        <span class="bubble"></span> How many person?
                    </li>
                    <li
                        class="{{ Route::currentRouteName() == 'transaction.reservation.cust.chooseRoom' ? 'completed' : '' }} {{ Route::currentRouteName() == 'transaction.reservation.cust.confirmation' ? 'completed' : '' }} {{ Route::currentRouteName() == 'transaction.reservation.cust.payDownPayment' ? 'completed' : '' }}">
                        <span class="bubble"></span> Pick a room
                    </li>
                    <li
                        class="{{ Route::currentRouteName() == 'transaction.reservation.cust.confirmation' ? 'completed' : '' }} {{ Route::currentRouteName() == 'transaction.reservation.cust.payDownPayment' ? 'completed' : '' }}">
                        <span class="bubble"></span> Confirmation
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
