<div class="sidebar">
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li @if ($pageSlug == 'dashboard') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-bar-32"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            <li @if ($pageSlug == 'cicchecklist') class="active " @endif>
                <a href="{{ route('checklistone.index') }}">
                    <i class="tim-icons icon-single-copy-04"></i>
                    <p>CIC Inventory Checklist</p>
                </a>
            </li>

            <li @if ($pageSlug == 'newchecklist') class="active " @endif>
                <a href="{{ route('checklisttwo.index') }}">
                    <i class="tim-icons icon-single-copy-04"></i>
                    <p>New Inventory</p>
                </a>
            </li>

            

            <li @if ($pageSlug == 'apr') class="active " @endif>
                <a href="{{ route('apr.index') }}">
                    <i class="tim-icons icon-paper"></i>
                    <p>APR</p>
                </a>
            </li>

            <li @if ($pageSlug == 'apr_in') class="active " @endif>
                <a href="{{ route('apr_in.index') }}">
                    <i class="tim-icons icon-paper"></i>
                    <p>APR Stock-in</p>
                </a>
            </li>

            <li @if ($pageSlug == 'apr_out') class="active " @endif>
                <a href="{{ route('apr_out.index') }}">
                    <i class="tim-icons icon-paper"></i>
                    <p>APR Stock-out</p>
                </a>
            </li>

            <li @if ($pageSlug == 'purchaserequest') class="active " @endif>
                <a href="{{ route('purchaserequest.index') }}">
                    <i class="tim-icons icon-satisfied"></i>
                    <p>Purchase Request</p>
                </a>
            </li>

            <li @if ($pageSlug == 'rfq') class="active " @endif>
                <a href="{{ route('rfq.index') }}">
                    <i class="tim-icons icon-tap-02"></i>
                    <p>RFQ</p>
                </a>
            </li>

            <li @if ($pageSlug == 'cenrr') class="active " @endif>
                <a href="{{ route('cenrr.index') }}">
                    <i class="tim-icons icon-pencil"></i>
                    <p>CENRR</p>
                </a>
            </li>

            <li @if ($pageSlug == 'ics') class="active " @endif>
                <a href="{{ route('ics.index') }}">
                    <i class="tim-icons icon-settings"></i>
                    <p>ICS-Supply </p>
                </a>
            </li>

            <li @if ($pageSlug == 'par') class="active " @endif>
                <a href="{{ route('par.index') }}">
                    <i class="tim-icons icon-delivery-fast"></i>
                    <p>PAR- Supply</p>
                </a>
            </li>

            <li @if ($pageSlug == 'ris') class="active " @endif>
                <a href="{{ route('ris.index') }}">
                    <i class="tim-icons icon-single-copy-04"></i>
                    <p>RIS</p>
                </a>
            </li>

            <li @if ($pageSlug == 'iar') class="active " @endif>
                <a href="{{ route('iar.index') }}">
                    <i class="tim-icons icon-pin"></i>
                    <p>IAR</p>
                </a>
            </li>

            <li @if ($pageSlug == 'aba') class="active " @endif>
                <a href="{{ route('aba.index') }}">
                    <i class="tim-icons icon-notes"></i>
                    <p>Abstract of Bids</p>
                </a>
            </li>

            <li @if ($pageSlug == 'dv') class="active " @endif>
                <a href="{{ route('dv.index') }}">
                    <i class="tim-icons icon-wallet-43"></i>
                    <p>Disbursement Voucher</p>
                </a>
            </li>

            <li @if ($pageSlug == 'burs') class="active " @endif>
                <a href="{{ route('burs.index') }}">
                    <i class="tim-icons icon-sound-wave"></i>
                    <p>BUR</p>
                </a>
            </li>

            <li @if ($pageSlug == 'porder') class="active " @endif>
                <a href="{{ route('porder.index') }}">
                    <i class="tim-icons icon-money-coins"></i>
                    <p>Purchase Order</p>
                </a>
            </li>

            <li @if ($pageSlug == 'obr') class="active " @endif>
                <a href="{{ route('obr.index') }}">
                    <i class="tim-icons icon-heart-2"></i>
                    <p>OBR</p>
                </a>
            </li>
            <li @if ($pageSlug == 'ptr') class="active " @endif>
                <a href="{{ route('ptr.index') }}">
                    <i class="tim-icons icon-credit-card"></i>
                    <p>PTR</p>
                </a>
            </li>

            <li @if ($pageSlug == 'rep') class="active " @endif>
                <a href="{{ route('rep.index') }}">
                    <i class="tim-icons icon-settings"></i>
                    <p>Pre-Repair</p>
                </a>
            </li>
            
            <li @if ($pageSlug == 'waste') class="active " @endif>
                <a href="{{ route('waste.index') }}">
                    <i class="tim-icons icon-trash-simple"></i>
                    <p>Waste Material</p>
                </a>
            </li>

            <!-- <li>
                <a data-toggle="collapse" href="#transactions" {{ $section == 'transactions' ? 'aria-expanded=true' : '' }}>
                    <i class="tim-icons icon-bank" ></i>
                    <span class="nav-link-text">Transactions</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse {{ $section == 'transactions' ? 'show' : '' }}" id="transactions">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'tstats') class="active " @endif>
                            <a href="{{ route('transactions.stats')  }}">
                                <i class="tim-icons icon-chart-pie-36"></i>
                                <p>Statistics</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'transactions') class="active " @endif>
                            <a href="{{ route('transactions.index')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>All</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'sales') class="active " @endif>
                            <a href="{{ route('sales.index')  }}">
                                <i class="tim-icons icon-bag-16"></i>
                                <p>Sales</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'expenses') class="active " @endif>
                            <a href="{{ route('transactions.type', ['type' => 'expense'])  }}">
                                <i class="tim-icons icon-coins"></i>
                                <p>Expenses</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'incomes') class="active " @endif>
                            <a href="{{ route('transactions.type', ['type' => 'income'])  }}">
                                <i class="tim-icons icon-credit-card"></i>
                                <p>Income</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'transfers') class="active " @endif>
                            <a href="{{ route('transfer.index')  }}">
                                <i class="tim-icons icon-send"></i>
                                <p>Transfers</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'payments') class="active " @endif>
                            <a href="{{ route('transactions.type', ['type' => 'payment'])  }}">
                                <i class="tim-icons icon-money-coins"></i>
                                <p>Payments</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> -->

            <!-- <li>
                <a data-toggle="collapse" href="#inventory" {{ $section == 'inventory' ? 'aria-expanded=true' : '' }}>
                    <i class="tim-icons icon-app"></i>
                    <span class="nav-link-text">Inventory</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse {{ $section == 'inventory' ? 'show' : '' }}" id="inventory">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'istats') class="active " @endif>
                            <a href="{{ route('inventory.stats') }}">
                                <i class="tim-icons icon-chart-pie-36"></i>
                                <p>Statistics</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'products') class="active " @endif>
                            <a href="{{ route('products.index') }}">
                                <i class="tim-icons icon-notes"></i>
                                <p>Products</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'categories') class="active " @endif>
                            <a href="{{ route('categories.index') }}">
                                <i class="tim-icons icon-tag"></i>
                                <p>Categoríes</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'receipts') class="active " @endif>
                            <a href="{{ route('receipts.index') }}">
                                <i class="tim-icons icon-paper"></i>
                                <p>Receipts</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> -->
<!-- 
            <li @if ($pageSlug == 'clients') class="active " @endif>
                <a href="{{ route('clients.index') }}">
                    <i class="tim-icons icon-single-02"></i>
                    <p>Clients</p>
                </a>
            </li> -->

            <!-- <li @if ($pageSlug == 'providers') class="active " @endif>
                <a href="{{ route('providers.index') }}">
                    <i class="tim-icons icon-delivery-fast"></i>
                    <p>Suppliers</p>
                </a>
            </li> -->


            <!-- <li>
                <a data-toggle="collapse" href="#clients">
                    <i class="tim-icons icon-single-02" ></i>
                    <span class="nav-link-text">Clients</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse" id="clients">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'clients-list') class="active " @endif>
                            <a href="{{ route('clients.index')  }}">
                                <i class="tim-icons icon-notes"></i>
                                <p>Administrar Clients</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'clients-create') class="active " @endif>
                            <a href="{{ route('clients.create')  }}">
                                <i class="tim-icons icon-simple-add"></i>
                                <p>New Client</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> -->


            <li>
                <a data-toggle="collapse" href="#users" {{ $section == 'users' ? 'aria-expanded=true' : '' }}>
                    <i class="tim-icons icon-badge" ></i>
                    <span class="nav-link-text">Users</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse {{ $section == 'users' ? 'aria-expanded=true' : '' }}" id="users">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a href="{{ route('profile.edit')  }}">
                                <i class="tim-icons icon-badge"></i>
                                <p>My profile</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'users-list') class="active " @endif>
                            <a href="{{ route('users.index')  }}">
                                <i class="tim-icons icon-notes"></i>
                                <p>Manage Users</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'users-create') class="active " @endif>
                            <a href="{{ route('users.create')  }}">
                                <i class="tim-icons icon-simple-add"></i>
                                <p>New user</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
