@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">

  <!-- buttons -->
<div class="template-demo">
  <a href="{{url('accounts/create')}}" class="btn btn-info mb-2 mb-md-0 mr-2">Add Ledger Account</a>
  {{-- <a href="{{url('customer-documents/')}}" class="btn btn-success">Document Management</a>
  <a href="{{url('new/customer/')}}" class="btn btn-success">New Customer</a> --}}
</div><br>

{{-- trail Table --}}

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
      <div class="card-body">
          <h4 class="card-title">Ledger Summary</h4>
          <p class="card-description"><code></code></p>

       

          <div class="table-responsive">
              <table class="table table-bordered">
                  <thead>
                      <tr>
                          <th class="card-title">Category</th>
                          <th class="card-title">Name</th>
                          <th class="card-title">No</th>
                          <th class="card-title">Start Date</th>
                          <th class="card-title">Debit Balance</th>
                          <th class="card-title">Credit Balance</th>
                          <th class="card-title">Delete</th>

                      </tr>
                  </thead>
                  <tbody>

                    {{-- Assets card start --}}
                    <tr>
                      
                      <td colspan="7" ><h5 style="color: rgb(226, 205, 14);">Assets</h5></td>         
                        </tr>
                   

                    {{-- for cash/Bank --}}

                    <tr>
                      <td colspan="7" style="color: rgb(96, 96, 221);">Cash/Bank</td>
                    </tr>

                    @php
                    $totalDebit = 0;
                    $totalCredit = 0;
                @endphp
                      @foreach($cashBank as $item)
                          <tr>
                              <td>{{ $item->Category }}</td>
                              
                              <td><a href="{{ route('accounts.show',$item->id) }}">{{ $item->name }}  </a></td>
                              <td>{{ $item->Code }}</td>
                              <td>{{ $item->StartingDate }}</td>
                              <td>{{ $item->Debit }}</td>
                              <td>{{ $item->Credit }}</td>
                              <td>
                                <!-- Button to trigger modal for account deletion -->
                                <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $item->id) }}')">Delete</button>
                            </td>
                          </tr>
                            @php
                            $totalDebit += $item->Debit;
                            $totalCredit += $item->Credit;
                            @endphp
                        @endforeach
                        <tr>
                          <td class="card-description">Total Balance</td>
                          <td>{{ $totalDebit - $totalCredit }}</td>
                          <td colspan="5"></td>
                        </tr>
                    {{-- cash/bank  end--}}


                    {{-- fixed assets --}}
                    <tr>
                      <td colspan="7" style="color: rgb(96, 96, 221);">Fixed Assets </td>
                    </tr>

                    @php
                    $totalDebit1 = 0;
                    $totalCredit1 = 0;
                @endphp
                      @foreach($fixAssets as $FixAssets)
                          <tr>
                              <td>{{ $FixAssets->Category }}</td>
                              <td><a href="{{ route('accounts.show',$FixAssets->id) }}">{{ $FixAssets->name }}  </a></td>
                              <td>{{ $FixAssets->Code }}</td>
                              <td>{{ $FixAssets->StartingDate }}</td>
                              <td>{{ $FixAssets->Debit }}</td>
                              <td>{{ $FixAssets->Credit }}</td>
                              <td>
                                <!-- Button to trigger modal for account deletion -->
                                <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $FixAssets->id) }}')">Delete</button>
                            </td>
                          </tr>
                            @php
                            $totalDebit1 += $FixAssets->Debit;
                            $totalCredit1 += $FixAssets->Credit;
                            @endphp
                        @endforeach
                        <tr>
                          <td class="card-description">Total Balance</td>
                          <td >{{ $totalDebit1 - $totalCredit1 }}</td>
                          <td colspan="5"></td>

                        </tr>

                    {{-- fixed assets end --}}

                    


                  {{-- other assets --}}
                       <tr>
                        <td colspan="7" style="color: rgb(96, 96, 221);">Other Assets </td>
                      </tr>
  
                      @php
                      $totalDebit2 = 0;
                      $totalCredit2 = 0;
                  @endphp
                        @foreach($otherAssets as $OtherAssets)
                            <tr>
                                <td>{{ $OtherAssets->Category }}</td>
                                <td><a href="{{ route('accounts.show',$OtherAssets->id) }}">{{ $OtherAssets->name }}  </a></td>
                                <td>{{ $OtherAssets->Code }}</td>
                                <td>{{ $OtherAssets->StartingDate }}</td>
                                <td>{{ $OtherAssets->Debit }}</td>
                                <td>{{ $OtherAssets->Credit }}</td>
                                <td>
                                  <!-- Button to trigger modal for account deletion -->
                                  <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $OtherAssets->id) }}')">Delete</button>
                              </td>
                            </tr>
                              @php
                              $totalDebit2 += $OtherAssets->Debit;
                              $totalCredit2 += $OtherAssets->Credit;
                              @endphp
                          @endforeach
                          <tr>
                            <td class="card-description">Total Balance</td>
                            <td >{{ $totalDebit2 - $totalCredit2 }}</td>
                            <td colspan="5"></td>

                          </tr>
  
                      {{-- other assets end --}}


                 

                  {{-- current assets --}}
                        <tr>
                          <td colspan="7" style="color: rgb(96, 96, 221);">Current Assets </td>
                        </tr>
    
                        @php
                        $totalDebit4 = 0;
                        $totalCredit4 = 0;
                    @endphp
                          @foreach($currentAssets as $CurrentAssets)
                              <tr>
                                  <td>{{ $CurrentAssets->Category }}</td>
                                  <td><a href="{{ route('accounts.show',$CurrentAssets->id) }}">{{ $CurrentAssets->name }}  </a></td>
                                  <td>{{ $CurrentAssets->Code }}</td>
                                  <td>{{ $CurrentAssets->StartingDate }}</td>
                                  <td>{{ $CurrentAssets->Debit }}</td>
                                  <td>{{ $CurrentAssets->Credit }}</td>
                                  <td>
                                    <!-- Button to trigger modal for account deletion -->
                                    <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $CurrentAssets->id) }}')">Delete</button>
                                </td>
                              </tr>
                                @php
                                $totalDebit4 += $CurrentAssets->Debit;
                                $totalCredit4 += $CurrentAssets->Credit;
                                @endphp
                            @endforeach
                            <tr>
                              <td class="card-description">Total Balance</td>
                              <td >{{ $totalDebit4 - $totalCredit4 }}</td>
                              <td colspan="5"></td>

                            </tr>
    
                        {{-- current assets end --}}

                        {{-- Assents end  --}}

                           {{-- Libility card start --}}

                           <tr>
                            <th class="card-title">Category</th>
                            <th class="card-title">Name</th>
                            <th class="card-title">No</th>
                            <th class="card-title">Start Date</th>
                            <th class="card-title">Debit Balance</th>
                            <th class="card-title">Credit Balance</th>
                            <th class="card-title">Delete</th>

                        </tr>

                      <tr>
                      <td colspan="7" ><h5 style="color: rgb(226, 205, 14);">Liabilities</h5></td>         
                      </tr>

                     

                         

                      
                      {{-- other liability --}}
                      <tr>
                        <td colspan="7" style="color: rgb(96, 96, 221);">Current Liabilities </td>
                      </tr>
  
                      @php
                      $libDebit2 = 0;
                      $libCredit2 = 0;
                  @endphp
                        @foreach($Otherlib as $otherlib)
                            <tr>
                                <td>{{ $otherlib->Category }}</td>
                                <td><a href="{{ route('accounts.show',$otherlib->id) }}">{{ $otherlib->name }}  </a></td>
                                <td>{{ $otherlib->Code }}</td>
                                <td>{{ $otherlib->StartingDate }}</td>
                                <td>{{ $otherlib->Debit }}</td>
                                <td>{{ $otherlib->Credit }}</td>
                                <td>
                                  <!-- Button to trigger modal for account deletion -->
                                  <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $otherlib->id) }}')">Delete</button>
                              </td>
                            </tr>
                              @php
                              $libDebit2 += $otherlib->Debit;
                              $libCredit2 += $otherlib->Credit;
                              @endphp
                          @endforeach
                          <tr>
                            <td class="card-description">Total Balance</td>
                            <td >{{ $libCredit2 - $libDebit2 }}</td>
                            <td colspan="5"></td>

                          </tr>
  
                      {{-- pay liability end --}}

                    {{-- credit liability --}}
                            <tr>
                              <td colspan="7" style="color: rgb(96, 96, 221);">Long Term Liabilities </td>
                            </tr>
        
                            @php
                            $libDebit3 = 0;
                            $libCredit3 = 0;
                        @endphp
                              @foreach($Longlib as $longlib)
                                  <tr>
                                      <td>{{ $longlib->Category }}</td>
                                      <td><a href="{{ route('accounts.show',$longlib->id) }}">{{ $longlib->name }}  </a></td>
                                      <td>{{ $longlib->Code }}</td>
                                      <td>{{ $longlib->StartingDate }}</td>
                                      <td>{{ $longlib->Debit }}</td>
                                      <td>{{ $longlib->Credit }}</td>
                                      <td>
                                        <!-- Button to trigger modal for account deletion -->
                                        <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $longlib->id) }}')">Delete</button>
                                    </td>
                                  </tr>
                                    @php
                                    $libDebit2 += $longlib->Debit;
                                    $libCredit2 += $longlib->Credit;
                                    @endphp
                                @endforeach
                                <tr>
                                  <td class="card-description">Total Balance</td>
                                  <td >{{ $libCredit2 - $libDebit2 }}</td>
                                  <td colspan="5"></td>
                                </tr>
        
                        {{-- credit liability end --}}
                        {{-- liability end --}}

                    {{--  Equity card start --}}

                                     <tr>
                                      <th class="card-title">Category</th>
                                      <th class="card-title">Name</th>
                                      <th class="card-title">No</th>
                                      <th class="card-title">Start Date</th>
                                      <th class="card-title">Debit Balance</th>
                                      <th class="card-title">Credit Balance</th>
                                      <th class="card-title">Delete</th>
                                  </tr>
          
                                <tr>
                                <td colspan="7" ><h5 style="color: rgb(226, 205, 14);">Equity</h5></td>         
                                </tr>


                           

                              {{-- new code fix later Capital,Retained Earning --}}
                              <tr>
                                <td colspan="7" style="color: rgb(96, 96, 221);">Capital</td>
                              </tr>
        
                            @php
                            $EquityDebit = 0;
                            $EquityCredit = 0;
                        @endphp
                              @foreach($equity as $Equity)
                                  <tr>
                                      <td>{{ $Equity->Category }}</td>
                                      <td><a href="{{ route('accounts.show',$Equity->id) }}">{{ $Equity->name }}  </a></td>
                                      <td>{{ $Equity->Code }}</td>
                                      <td>{{ $Equity->StartingDate }}</td>
                                      <td>{{ $Equity->Debit }}</td>
                                      <td>{{ $Equity->Credit }}</td>
                                      <td>
                                        <!-- Button to trigger modal for account deletion -->
                                        <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Equity->id) }}')">Delete</button>
                                    </td>
                                  </tr>

                                    @php
                                    $EquityDebit += $Equity->Debit;
                                    $EquityCredit += $Equity->Credit;
                                    @endphp
                                @endforeach

                              
                                <tr>
                                  <td class="card-description">Total Balance</td>
                                  <td >{{ $EquityCredit - $EquityDebit }}</td>
                                  <td colspan="5"></td>
                                </tr>

                                <tr>
                                  <td colspan="7" style="color: rgb(96, 96, 221);">Retained Earning</td>
                                </tr>

                                <tr>
                                  <td class="card-description">Total Balance</td>
                                  <td >{{ $EquityCredit - $EquityDebit }}</td>
                                  <td colspan="5"></td>
                                </tr>
        

                    {{-- Equity end --}}


                    {{--  Income card start --}}

                  <tr>
                  <td colspan="7" ><h5 style="color: rgb(226, 205, 14);">Income</h5></td>         
                  </tr>


                  {{-- commission start --}}
                  <tr>
                    <td colspan="7" style="color: rgb(139, 228, 80);">Insurance Commission</td>
                  </tr>

                  @php
                  $commissionInDebit = 0;
                  $commissionInCredit = 0;
              @endphp
                    @foreach($commissionIncome as $CommissionIncome)
                        <tr>
                            <td>{{ $CommissionIncome->Category }}</td>
                            <td><a href="{{ route('accounts.show',$CommissionIncome->id) }}">{{ $CommissionIncome->name }}  </a></td>
                            <td>{{ $CommissionIncome->Code }}</td>
                            <td>{{ $CommissionIncome->StartingDate }}</td>
                            <td>{{ $CommissionIncome->Debit }}</td>
                            <td>{{ $CommissionIncome->Credit }}</td>
                            <td>
                              <!-- Button to trigger modal for account deletion -->
                              <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $CommissionIncome->id) }}')">Delete</button>
                          </td>
                        </tr>
                          @php
                          $commissionInDebit += $CommissionIncome->Debit;
                          $commissionInCredit += $CommissionIncome->Credit;
                          @endphp
                      @endforeach
                      <tr>
                        <td class="card-description">Total Balance</td>
                        <td >${{$commissionInCredit-$commissionInDebit}}</td>
                        <td colspan="5"></td>
                      </tr>
                      {{-- commission end --}}

                    {{-- Tax start --}}
                    <tr>
                      <td colspan="7" style="color: rgb(139, 228, 80);">Tax Prep/Filing Fee</td>
                    </tr>
  
                    @php
                    $TaxDebit = 0;
                    $TaxCredit = 0;
                @endphp
                      @foreach($tax as $taxs)
                          <tr>
                              <td>{{ $taxs->Category }}</td>
                              <td><a href="{{ route('accounts.show',$taxs->id) }}">{{ $taxs->name }}  </a></td>
                              <td>{{ $taxs->Code }}</td>
                              <td>{{ $taxs->StartingDate }}</td>
                              <td>{{ $taxs->Debit }}</td>
                              <td>{{ $taxs->Credit }}</td>
                              <td>
                                <!-- Button to trigger modal for account deletion -->
                                <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $taxs->id) }}')">Delete</button>
                            </td>
                          </tr>
                            @php
                            $TaxDebit += $taxs->Debit;
                            $TaxCredit += $taxs->Credit;
                            @endphp
                        @endforeach
                        <tr>
                          <td class="card-description">Total Balance</td>
                          <td >${{$TaxCredit-$TaxDebit}}</td>
                          <td colspan="5"></td>
                        </tr>
                        {{-- Tax end --}}

                       {{-- ea start --}}
                       <tr>
                        <td colspan="7" style="color: rgb(139, 228, 80);">EA Service Fee</td>
                      </tr>
    
                      @php
                      $eaDebit = 0;
                      $eaCredit = 0;
                  @endphp
                        @foreach($ea as $Ea)
                            <tr>
                                <td>{{ $Ea->Category }}</td>
                                <td><a href="{{ route('accounts.show',$Ea->id) }}">{{ $Ea->name }}  </a></td>
                                <td>{{ $Ea->Code }}</td>
                                <td>{{ $Ea->StartingDate }}</td>
                                <td>{{ $Ea->Debit }}</td>
                                <td>{{ $Ea->Credit }}</td>
                                <td>
                                  <!-- Button to trigger modal for account deletion -->
                                  <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Ea->id) }}')">Delete</button>
                              </td>
                            </tr>
                              @php
                              $eaDebit += $Ea->Debit;
                              $eaCredit += $Ea->Credit;
                              @endphp
                          @endforeach
                          <tr>
                            <td class="card-description">Total Balance</td>
                            <td >${{$eaCredit-$eaDebit}}</td>
                            <td colspan="5"></td>
                          </tr>
                          {{-- ea end --}}

                        {{-- Incorporating Fee start --}}
                        <tr>
                          <td colspan="7" style="color: rgb(139, 228, 80);">Incorporating Fee</td>
                        </tr>
      
                        @php
                        $incorporationDebit = 0;
                        $incorporationCredit = 0;
                    @endphp
                          @foreach($incorporation as $Incorporation)
                              <tr>
                                  <td>{{ $Incorporation->Category }}</td>
                                  <td><a href="{{ route('accounts.show',$Incorporation->id) }}">{{ $Incorporation->name }}  </a></td>
                                  <td>{{ $Incorporation->Code }}</td>
                                  <td>{{ $Incorporation->StartingDate }}</td>
                                  <td>{{ $Incorporation->Debit }}</td>
                                  <td>{{ $Incorporation->Credit }}</td>
                                  <td>
                                    <!-- Button to trigger modal for account deletion -->
                                    <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Incorporation->id) }}')">Delete</button>
                                </td>
                              </tr>
                                @php
                                $incorporationDebit += $Incorporation->Debit;
                                $incorporationCredit += $Incorporation->Credit;
                                @endphp
                            @endforeach
                            <tr>
                              <td class="card-description">Total Balance</td>
                              <td >${{$incorporationCredit-$incorporationDebit}}</td>
                              <td colspan="5"></td>
                            </tr>
                            {{-- Incorporating Fee end --}}

                   {{-- Payroll start --}}
                   <tr>
                    <td colspan="7" style="color: rgb(139, 228, 80);">Payroll Fee</td>
                  </tr>

                  @php
                  $PayrollDebit = 0;
                  $PayrollCredit = 0;
              @endphp
                    @foreach($payroll as $Payroll)
                        <tr>
                            <td>{{ $Payroll->Category }}</td>
                            <td><a href="{{ route('accounts.show',$Payroll->id) }}">{{ $Payroll->name }}  </a></td>
                            <td>{{ $Payroll->Code }}</td>
                            <td>{{ $Payroll->StartingDate }}</td>
                            <td>{{ $Payroll->Debit }}</td>
                            <td>{{ $Payroll->Credit }}</td>
                            <td>
                              <!-- Button to trigger modal for account deletion -->
                              <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Payroll->id) }}')">Delete</button>
                          </td>
                        </tr>
                          @php
                          $PayrollDebit += $Payroll->Debit;
                          $PayrollCredit += $Payroll->Credit;
                          @endphp
                      @endforeach
                      <tr>
                        <td class="card-description">Total Balance</td>
                        <td >${{$PayrollCredit-$PayrollDebit}}</td>
                        <td colspan="5"></td>
                      </tr>
                      {{-- Payroll end --}}

               {{-- Bookkeeping Fee start --}}
               <tr>
                <td colspan="7" style="color: rgb(139, 228, 80);">Bookkeeping Fee</td>
              </tr>

              @php
              $bookDebit = 0;
              $bookCredit = 0;
          @endphp
                @foreach($book as $Book)
                    <tr>
                        <td>{{ $Book->Category }}</td>
                        <td><a href="{{ route('accounts.show',$Book->id) }}">{{ $Book->name }}  </a></td>
                        <td>{{ $Book->Code }}</td>
                        <td>{{ $Book->StartingDate }}</td>
                        <td>{{ $Book->Debit }}</td>
                        <td>{{ $Book->Credit }}</td>
                        <td>
                          <!-- Button to trigger modal for account deletion -->
                          <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Book->id) }}')">Delete</button>
                      </td>
                    </tr>
                      @php
                      $bookDebit += $Book->Debit;
                      $bookCredit += $Book->Credit;
                      @endphp
                  @endforeach
                  <tr>
                    <td class="card-description">Total Balance</td>
                    <td >${{$bookCredit-$bookDebit}}</td>
                    <td colspan="5"></td>
                  </tr>
                  {{-- Bookkeeping Fee end --}}

                {{-- Consultation Fee start --}}
                <tr>
                  <td colspan="7" style="color: rgb(139, 228, 80);">Consultation Fee</td>
                </tr>

                @php
                $consultDebit = 0;
                $consultCredit = 0;
            @endphp
                  @foreach($consult as $Consult)
                      <tr>
                          <td>{{ $Consult->Category }}</td>
                          <td><a href="{{ route('accounts.show',$Consult->id) }}">{{ $Consult->name }}  </a></td>
                          <td>{{ $Consult->Code }}</td>
                          <td>{{ $Consult->StartingDate }}</td>
                          <td>{{ $Consult->Debit }}</td>
                          <td>{{ $Consult->Credit }}</td>
                          <td>
                            <!-- Button to trigger modal for account deletion -->
                            <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Consult->id) }}')">Delete</button>
                        </td>
                      </tr>
                        @php
                        $consultDebit += $Consult->Debit;
                        $consultCredit += $Consult->Credit;
                        @endphp
                    @endforeach
                    <tr>
                      <td class="card-description">Total Balance</td>
                      <td >${{$consultCredit-$consultDebit}}</td>
                      <td colspan="5"></td>
                    </tr>
                    {{-- Consultation Fee end --}}

               {{-- Website/App start --}}
               <tr>
                <td colspan="7" style="color: rgb(139, 228, 80);">Website/App Fee</td>
              </tr>

              @php
              $websiteDebit = 0;
              $websiteCredit = 0;
          @endphp
                @foreach($website as $Website)
                    <tr>
                        <td>{{ $Website->Category }}</td>
                        <td><a href="{{ route('accounts.show',$Website->id) }}">{{ $Website->name }}  </a></td>
                        <td>{{ $Website->Code }}</td>
                        <td>{{ $Website->StartingDate }}</td>
                        <td>{{ $Website->Debit }}</td>
                        <td>{{ $Website->Credit }}</td>
                        <td>
                          <!-- Button to trigger modal for account deletion -->
                          <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Website->id) }}')">Delete</button>
                      </td>
                    </tr>
                      @php
                      $websiteDebit += $Website->Debit;
                      $websiteCredit += $Website->Credit;
                      @endphp
                  @endforeach
                  <tr>
                    <td class="card-description">Total Balance</td>
                    <td >${{$websiteCredit-$websiteDebit}}</td>
                    <td colspan="5"></td>
                  </tr>
                  {{-- Website/App  end --}}

                   {{-- Web start --}}
                   <tr>
                    <td colspan="7" style="color: rgb(139, 228, 80);">Web Maintenance Fee</td>
                  </tr>

                  @php
                  $webDebit = 0;
                  $webCredit = 0;
              @endphp
                    @foreach($web as $webs)
                        <tr>
                            <td>{{ $webs->Category }}</td>
                            <td><a href="{{ route('accounts.show',$webs->id) }}">{{ $webs->name }}  </a></td>
                            <td>{{ $webs->Code }}</td>
                            <td>{{ $webs->StartingDate }}</td>
                            <td>{{ $webs->Debit }}</td>
                            <td>{{ $webs->Credit }}</td>
                            <td>
                              <!-- Button to trigger modal for account deletion -->
                              <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $webs->id) }}')">Delete</button>
                          </td>
                        </tr>
                          @php
                          $webDebit += $webs->Debit;
                          $webCredit += $webs->Credit;
                          @endphp
                      @endforeach
                      <tr>
                        <td class="card-description">Total Balance</td>
                        <td >${{$webCredit-$webDebit}}</td>
                        <td colspan="5"></td>
                      </tr>
                      {{-- Web end --}}

                       {{-- Domain Fee start --}}
                       <tr>
                        <td colspan="7" style="color: rgb(139, 228, 80);">Domain Fee</td>
                      </tr>
    
                      @php
                      $domainDebit = 0;
                      $domainCredit = 0;
                  @endphp
                        @foreach($domain as $Domain)
                            <tr>
                                <td>{{ $Domain->Category }}</td>
                                <td><a href="{{ route('accounts.show',$Domain->id) }}">{{ $Domain->name }}  </a></td>
                                <td>{{ $Domain->Code }}</td>
                                <td>{{ $Domain->StartingDate }}</td>
                                <td>{{ $Domain->Debit }}</td>
                                <td>{{ $Domain->Credit }}</td>
                                <td>
                                  <!-- Button to trigger modal for account deletion -->
                                  <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Domain->id) }}')">Delete</button>
                              </td>
                            </tr>
                              @php
                              $domainDebit += $Domain->Debit;
                              $domainCredit += $Domain->Credit;
                              @endphp
                          @endforeach
                          <tr>
                            <td class="card-description">Total Balance</td>
                            <td >${{$domainCredit-$domainDebit}}</td>
                            <td colspan="5"></td>
                          </tr>
                          {{-- Domain end --}}

                      {{-- Hosting Fee start --}}
                       <tr>
                        <td colspan="7" style="color: rgb(139, 228, 80);">Hosting Fee</td>
                      </tr>
    
                      @php
                      $hostingDebit = 0;
                      $hostingCredit = 0;
                  @endphp
                        @foreach($hosting as $Hosting)
                            <tr>
                                <td>{{ $Hosting->Category }}</td>
                                <td><a href="{{ route('accounts.show',$Hosting->id) }}">{{ $Hosting->name }}  </a></td>
                                <td>{{ $Hosting->Code }}</td>
                                <td>{{ $Hosting->StartingDate }}</td>
                                <td>{{ $Hosting->Debit }}</td>
                                <td>{{ $Hosting->Credit }}</td>
                                <td>
                                  <!-- Button to trigger modal for account deletion -->
                                  <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Hosting->id) }}')">Delete</button>
                              </td>
                            </tr>
                              @php
                              $hostingDebit += $Hosting->Debit;
                              $hostingCredit += $Hosting->Credit;
                              @endphp
                          @endforeach
                          <tr>
                            <td class="card-description">Total Balance</td>
                            <td >${{$hostingCredit-$hostingDebit}}</td>
                            <td colspan="5"></td>
                          </tr>
                          {{-- Hosting Fee end --}}

            
                      {{-- IT Consult Fee start --}}
                      <tr>
                        <td colspan="7" style="color: rgb(139, 228, 80);">IT Consult Fee</td>
                      </tr>
    
                      @php
                      $ITDebit = 0;
                      $ITCredit = 0;
                  @endphp
                        @foreach($it as $IT)
                            <tr>
                                <td>{{ $IT->Category }}</td>
                                <td><a href="{{ route('accounts.show',$IT->id) }}">{{ $IT->name }}  </a></td>
                                <td>{{ $IT->Code }}</td>
                                <td>{{ $IT->StartingDate }}</td>
                                <td>{{ $IT->Debit }}</td>
                                <td>{{ $IT->Credit }}</td>
                                <td>
                                  <!-- Button to trigger modal for account deletion -->
                                  <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $IT->id) }}')">Delete</button>
                              </td>
                            </tr>
                              @php
                              $ITDebit += $IT->Debit;
                              $ITCredit += $IT->Credit;
                              @endphp
                          @endforeach
                          <tr>
                            <td class="card-description">Total Balance</td>
                            <td >${{$ITCredit-$ITDebit}}</td>
                            <td colspan="5"></td>
                          </tr>
                          {{-- IT Consult Fee end --}}


                  {{-- SEO Fees start --}}
                  <tr>
                    <td colspan="7" style="color: rgb(139, 228, 80);">SEO Fees</td>
                  </tr>

                  @php
                  $SeoDebit = 0;
                  $SeoCredit = 0;
              @endphp
                    @foreach($seo as $Seo)
                        <tr>
                            <td>{{ $Seo->Category }}</td>
                            <td><a href="{{ route('accounts.show',$Seo->id) }}">{{ $Seo->name }}  </a></td>
                            <td>{{ $Seo->Code }}</td>
                            <td>{{ $Seo->StartingDate }}</td>
                            <td>{{ $Seo->Debit }}</td>
                            <td>{{ $Seo->Credit }}</td>
                            <td>
                              <!-- Button to trigger modal for account deletion -->
                              <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Seo->id) }}')">Delete</button>
                          </td>
                        </tr>
                          @php
                          $SeoDebit += $Seo->Debit;
                          $SeoCredit += $Seo->Credit;
                          @endphp
                      @endforeach
                      <tr>
                        <td class="card-description">Total Balance</td>
                        <td >${{$SeoCredit-$SeoDebit}}</td>
                        <td colspan="5"></td>
                      </tr>
                      {{-- SEO Fees end --}}

        {{-- SMM Fees start --}}
        <tr>
          <td colspan="7" style="color: rgb(139, 228, 80);">SMM Fees</td>
        </tr>

        @php
        $SmmDebit = 0;
        $SmmCredit = 0;
    @endphp
          @foreach($smm as $Smm)
              <tr>
                  <td>{{ $Smm->Category }}</td>
                  <td><a href="{{ route('accounts.show',$Smm->id) }}">{{ $Smm->name }}  </a></td>
                  <td>{{ $Smm->Code }}</td>
                  <td>{{ $Smm->StartingDate }}</td>
                  <td>{{ $Smm->Debit }}</td>
                  <td>{{ $Smm->Credit }}</td>
                  <td>
                    <!-- Button to trigger modal for account deletion -->
                    <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Smm->id) }}')">Delete</button>
                </td>
              </tr>
                @php
                $SmmDebit += $Smm->Debit;
                $SmmCredit += $Smm->Credit;
                @endphp
            @endforeach
            <tr>
              <td class="card-description">Total Balance</td>
              <td >${{$SmmCredit-$SmmDebit}}</td>
              <td colspan="5"></td>
            </tr>
            {{-- Smm Fees end --}}



        {{-- ppc Fees start --}}
        <tr>
          <td colspan="7" style="color: rgb(139, 228, 80);">PPC Fees</td>
        </tr>

        @php
        $PpcDebit = 0;
        $PpcCredit = 0;
    @endphp
          @foreach($ppc as $Ppc)
              <tr>
                  <td>{{ $Ppc->Category }}</td>
                  <td><a href="{{ route('accounts.show',$Ppc->id) }}">{{ $Ppc->name }}  </a></td>
                  <td>{{ $Ppc->Code }}</td>
                  <td>{{ $Ppc->StartingDate }}</td>
                  <td>{{ $Ppc->Debit }}</td>
                  <td>{{ $Ppc->Credit }}</td>
                  <td>
                    <!-- Button to trigger modal for account deletion -->
                    <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Ppc->id) }}')">Delete</button>
                </td>
              </tr>
                @php
                $PpcDebit += $Ppc->Debit;
                $PpcCredit += $Ppc->Credit;
                @endphp
            @endforeach
            <tr>
              <td class="card-description">Total Balance</td>
              <td >${{$PpcCredit-$PpcDebit}}</td>
              <td colspan="5"></td>
            </tr>
            {{-- ppc Fees end --}}



        {{-- Graphic Designing Fee  start --}}
        <tr>
          <td colspan="7" style="color: rgb(139, 228, 80);">Graphic Designing Fee</td>
        </tr>

        @php
        $GraphicDebit = 0;
        $GraphicCredit = 0;
    @endphp
          @foreach($graphic as $Graphic)
              <tr>
                  <td>{{ $Graphic->Category }}</td>
                  <td><a href="{{ route('accounts.show',$Graphic->id) }}">{{ $Graphic->name }}  </a></td>
                  <td>{{ $Graphic->Code }}</td>
                  <td>{{ $Graphic->StartingDate }}</td>
                  <td>{{ $Graphic->Debit }}</td>
                  <td>{{ $Graphic->Credit }}</td>
                  <td>
                    <!-- Button to trigger modal for account deletion -->
                    <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Graphic->id) }}')">Delete</button>
                </td>
              </tr>
                @php
                $GraphicDebit += $Graphic->Debit;
                $GraphicCredit += $Graphic->Credit;
                @endphp
            @endforeach
            <tr>
              <td class="card-description">Total Balance</td>
              <td >${{$GraphicCredit-$GraphicDebit}}</td>
              <td colspan="5"></td>
            </tr>
            {{-- Graphic Designing Fee  end --}}


             {{-- Content Fee  start --}}
        <tr>
          <td colspan="7" style="color: rgb(139, 228, 80);">Content Fee</td>
        </tr>

        @php
        $ContentDebit = 0;
        $ContentCredit = 0;
    @endphp
          @foreach($content as $Content)
              <tr>
                  <td>{{ $Content->Category }}</td>
                  <td><a href="{{ route('accounts.show',$Content->id) }}">{{ $Content->name }}  </a></td>
                  <td>{{ $Content->Code }}</td>
                  <td>{{ $Content->StartingDate }}</td>
                  <td>{{ $Content->Debit }}</td>
                  <td>{{ $Content->Credit }}</td>
                  <td>
                    <!-- Button to trigger modal for account deletion -->
                    <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Content->id) }}')">Delete</button>
                </td>
              </tr>
                @php
                $ContentDebit += $Content->Debit;
                $ContentCredit += $Content->Credit;
                @endphp
            @endforeach
            <tr>
              <td class="card-description">Total Balance</td>
              <td >${{$ContentCredit-$ContentDebit}}</td>
              <td colspan="5"></td>
            </tr>
            {{-- Content Fee  end --}}

              {{-- Dividends Received  start --}}
        <tr>
          <td colspan="7" style="color: rgb(139, 228, 80);">Dividends Received</td>
        </tr>

        @php
        $DividendsDebit = 0;
        $DividendsCredit = 0;
    @endphp
          @foreach($dividends as $Dividends)
              <tr>
                  <td>{{ $Dividends->Category }}</td>
                  <td><a href="{{ route('accounts.show',$Dividends->id) }}">{{ $Dividends->name }}  </a></td>
                  <td>{{ $Dividends->Code }}</td>
                  <td>{{ $Dividends->StartingDate }}</td>
                  <td>{{ $Dividends->Debit }}</td>
                  <td>{{ $Dividends->Credit }}</td>
                  <td>
                    <!-- Button to trigger modal for account deletion -->
                    <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Dividends->id) }}')">Delete</button>
                </td>
              </tr>
                @php
                $DividendsDebit += $Dividends->Debit;
                $DividendsCredit += $Dividends->Credit;
                @endphp
            @endforeach
            <tr>
              <td class="card-description">Total Balance</td>
              <td >${{$DividendsCredit-$DividendsDebit}}</td>
              <td colspan="5"></td>
            </tr>
            {{-- Dividends Received end --}}

                    {{--  Interest Earned  start --}}
        <tr>
          <td colspan="7" style="color: rgb(139, 228, 80);">Interest Earned</td>
        </tr>

        @php
        $InterestDebit = 0;
        $InterestCredit = 0;
    @endphp
          @foreach($interest as $Interest)
              <tr>
                  <td>{{ $Interest->Category }}</td>
                  <td><a href="{{ route('accounts.show',$Interest->id) }}">{{ $Interest->name }}  </a></td>
                  <td>{{ $Interest->Code }}</td>
                  <td>{{ $Interest->StartingDate }}</td>
                  <td>{{ $Interest->Debit }}</td>
                  <td>{{ $Interest->Credit }}</td>
                  <td>
                    <!-- Button to trigger modal for account deletion -->
                    <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Interest->id) }}')">Delete</button>
                </td>
              </tr>
                @php
                $InterestDebit += $Interest->Debit;
                $InterestCredit += $Interest->Credit;
                @endphp
            @endforeach
            <tr>
              <td class="card-description">Total Balance</td>
              <td >${{$InterestCredit-$InterestDebit}}</td>
              <td colspan="5"></td>
            </tr>
            {{-- Interest Earned  end --}}

                     {{--  Rent Received  start --}}
        <tr>
          <td colspan="7" style="color: rgb(139, 228, 80);">Rent Received </td>
        </tr>

        @php
        $RentDebit = 0;
        $RentCredit = 0;
    @endphp
          @foreach($rent as $Rent)
              <tr>
                  <td>{{ $Rent->Category }}</td>
                  <td><a href="{{ route('accounts.show',$Rent->id) }}">{{ $Rent->name }}  </a></td>
                  <td>{{ $Rent->Code }}</td>
                  <td>{{ $Rent->StartingDate }}</td>
                  <td>{{ $Rent->Debit }}</td>
                  <td>{{ $Rent->Credit }}</td>
                  <td>
                    <!-- Button to trigger modal for account deletion -->
                    <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Rent->id) }}')">Delete</button>
                </td>
              </tr>
                @php
                $RentDebit += $Rent->Debit;
                $RentCredit += $Rent->Credit;
                @endphp
            @endforeach
            <tr>
              <td class="card-description">Total Balance</td>
              <td >${{$RentCredit-$RentDebit}}</td>
              <td colspan="5"></td>
            </tr>
            {{-- Rent Received   end --}}

                             {{--  Royalties Received  start --}}
        <tr>
          <td colspan="7" style="color: rgb(139, 228, 80);">Royalties Received </td>
        </tr>

        @php
        $RoyalDebit = 0;
        $RoyalCredit = 0;
    @endphp
          @foreach($royal as $Royal)
              <tr>
                  <td>{{ $Rent->Category }}</td>
                  <td><a href="{{ route('accounts.show',$Royal->id) }}">{{ $Royal->name }}  </a></td>
                  <td>{{ $Royal->Code }}</td>
                  <td>{{ $Royal->StartingDate }}</td>
                  <td>{{ $Royal->Debit }}</td>
                  <td>{{ $Royal->Credit }}</td>
                  <td>
                    <!-- Button to trigger modal for account deletion -->
                    <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Royal->id) }}')">Delete</button>
                </td>
              </tr>
                @php
                $RoyalDebit += $Royal->Debit;
                $RoyalCredit += $Royal->Credit;
                @endphp
            @endforeach
            <tr>
              <td class="card-description">Total Balance</td>
              <td >${{$RoyalCredit-$RoyalDebit}}</td>
              <td colspan="5"></td>
            </tr>
            {{-- Royalties Received   end --}}


           {{--  Capital Gain start --}}
        <tr>
          <td colspan="7" style="color: rgb(139, 228, 80);">Capital Gain </td>
        </tr>

        @php
        $CapitalDebit = 0;
        $CapitalCredit = 0;
    @endphp
          @foreach($capital as $Capital)
              <tr>
                  <td>{{ $Capital->Category }}</td>
                  <td><a href="{{ route('accounts.show',$Capital->id) }}">{{ $Capital->name }}  </a></td>
                  <td>{{ $Capital->Code }}</td>
                  <td>{{ $Capital->StartingDate }}</td>
                  <td>{{ $Capital->Debit }}</td>
                  <td>{{ $Capital->Credit }}</td>
                  <td>
                    <!-- Button to trigger modal for account deletion -->
                    <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Capital->id) }}')">Delete</button>
                </td>
              </tr>
                @php
                $CapitalDebit += $Capital->Debit;
                $CapitalCredit += $Capital->Credit;
                @endphp
            @endforeach
            <tr>
              <td class="card-description">Total Balance</td>
              <td >${{$CapitalCredit-$CapitalDebit}}</td>
              <td colspan="5"></td>
            </tr>
            {{-- Capital Gain   end --}}

          {{--  Other Income start --}}
        <tr>
          <td colspan="7" style="color: rgb(139, 228, 80);">Other Income </td>
        </tr>

        @php
        $OtherIcomeDebit = 0;
        $OtherIcomeCredit = 0;
    @endphp
          @foreach($otherIcome as $OtherIcome)
              <tr>
                  <td>{{ $OtherIcome->Category }}</td>
                  <td><a href="{{ route('accounts.show',$OtherIcome->id) }}">{{ $OtherIcome->name }}  </a></td>
                  <td>{{ $OtherIcome->Code }}</td>
                  <td>{{ $OtherIcome->StartingDate }}</td>
                  <td>{{ $OtherIcome->Debit }}</td>
                  <td>{{ $OtherIcome->Credit }}</td>
                  <td>
                    <!-- Button to trigger modal for account deletion -->
                    <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $OtherIcome->id) }}')">Delete</button>
                </td>
              </tr>
                @php
                $OtherIcomeDebit += $OtherIcome->Debit;
                $OtherIcomeCredit += $OtherIcome->Credit;
                @endphp
            @endforeach
            <tr>
              <td class="card-description">Total Balance</td>
              <td >${{$OtherIcomeCredit-$OtherIcomeDebit}}</td>
              <td colspan="5"></td>
            </tr>
            {{-- Other Income   end --}}




                  {{--  Income card end --}}




                   {{--  Expense card start --}}

                       <tr>
                        <td colspan="7" ><h5 style="color: rgb(226, 205, 14);">Expense</h5></td>         
                        </tr>

                  {{--  Car  start --}}
                   <tr>
                    <td colspan="7" style="color: rgb(139, 228, 80);">Car and truck </td>
                  </tr>

                  @php
                  $carDebit = 0;
                  $carCredit = 0;
              @endphp
                    @foreach($Car as $car)
                        <tr>
                            <td>{{ $car->Category }}</td>
                            <td><a href="{{ route('accounts.show',$car->id) }}">{{ $car->name }}  </a></td>
                            <td>{{ $car->Code }}</td>
                            <td>{{ $car->StartingDate }}</td>
                            <td>{{ $car->Debit }}</td>
                            <td>{{ $car->Credit }}</td>
                            <td>
                              <!-- Button to trigger modal for account deletion -->
                              <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $car->id) }}')">Delete</button>
                          </td>
                        </tr>
                          @php
                          $carDebit += $car->Debit;
                          $carCredit += $car->Credit;
                          @endphp
                      @endforeach
                      <tr>
                        <td class="card-description">Total Balance</td>
                        <td >{{ $carCredit - $carDebit }}</td>
                        <td colspan="5"></td>
                      </tr>

              {{--  Car  end --}}

              {{--  Legal  start --}}
                   <tr>
                    <td colspan="7" style="color: rgb(139, 228, 80);">Legal and professional services </td>
                  </tr>

                  @php
                  $legalDebit = 0;
                  $legalCredit = 0;
              @endphp
                    @foreach($Legal as $legal)
                        <tr>
                            <td>{{ $legal->Category }}</td>
                            <td><a href="{{ route('accounts.show',$legal->id) }}">{{ $legal->name }}  </a></td>
                            <td>{{ $legal->Code }}</td>
                            <td>{{ $legal->StartingDate }}</td>
                            <td>{{ $legal->Debit }}</td>
                            <td>{{ $legal->Credit }}</td>
                            <td>
                              <!-- Button to trigger modal for account deletion -->
                              <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $legal->id) }}')">Delete</button>
                          </td>
                        </tr>
                          @php
                          $legalDebit += $legal->Debit;
                          $legalCredit += $legal->Credit;
                          @endphp
                      @endforeach
                      <tr>
                        <td class="card-description">Total Balance</td>
                        <td >{{ $legalCredit - $legalDebit }}</td>
                        <td colspan="5"></td>
                      </tr>

              {{--  Legal  end --}}

             {{--  Vehicles1  start --}}
                   <tr>
                    <td colspan="7" style="color: rgb(139, 228, 80);">Vehicles, machinery, and equipment </td>
                  </tr>

                  @php
                  $vehicles1Debit = 0;
                  $vehicles1Credit = 0;
              @endphp
                    @foreach($Vehicles1 as $vehicles1)
                        <tr>
                            <td>{{ $vehicles1->Category }}</td>
                            <td><a href="{{ route('accounts.show',$vehicles1->id) }}">{{ $vehicles1->name }}  </a></td>
                            <td>{{ $vehicles1->Code }}</td>
                            <td>{{ $vehicles1->StartingDate }}</td>
                            <td>{{ $vehicles1->Debit }}</td>
                            <td>{{ $vehicles1->Credit }}</td>
                            <td>
                              <!-- Button to trigger modal for account deletion -->
                              <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $vehicles1->id) }}')">Delete</button>
                          </td>
                        </tr>
                          @php
                          $vehicles1Debit += $vehicles1->Debit;
                          $vehicles1Credit += $vehicles1->Credit;
                          @endphp
                      @endforeach
                      <tr>
                        <td class="card-description">Total Balance</td>
                        <td >{{ $vehicles1Credit - $vehicles1Debit }}</td>
                        <td colspan="5"></td>
                      </tr>

                  {{--  Vehicles1  end --}}

                  {{--  Other business  start --}}
                    <tr>
                      <td colspan="7" style="color: rgb(139, 228, 80);">Other business property </td>
                    </tr>
  
                    @php
                    $otherbusDebit = 0;
                    $otherbusCredit = 0;
                @endphp
                      @foreach($Otherbus as $otherbus)
                          <tr>
                              <td>{{ $otherbus->Category }}</td>
                              <td><a href="{{ route('accounts.show',$otherbus->id) }}">{{ $otherbus->name }}  </a></td>
                              <td>{{ $otherbus->Code }}</td>
                              <td>{{ $otherbus->StartingDate }}</td>
                              <td>{{ $otherbus->Debit }}</td>
                              <td>{{ $otherbus->Credit }}</td>
                              <td>
                                <!-- Button to trigger modal for account deletion -->
                                <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $otherbus->id) }}')">Delete</button>
                            </td>
                          </tr>
                            @php
                            $otherbusDebit += $otherbus->Debit;
                            $otherbusCredit += $otherbus->Credit;
                            @endphp
                        @endforeach
                        <tr>
                          <td class="card-description">Total Balance</td>
                          <td >{{ $otherbusCredit - $otherbusDebit }}</td>
                          <td colspan="5"></td>
                        </tr>
  
                {{--  Other business  end --}}

               {{--  Deductible  start --}}
                   <tr>
                    <td colspan="7" style="color: rgb(139, 228, 80);">Deductible meals </td>
                  </tr>

                  @php
                  $deductibleDebit = 0;
                  $deductibleCredit = 0;
              @endphp
                    @foreach($Deductible as $deductible)
                        <tr>
                            <td>{{ $deductible->Category }}</td>
                            <td><a href="{{ route('accounts.show',$deductible->id) }}">{{ $deductible->name }}  </a></td>
                            <td>{{ $deductible->Code }}</td>
                            <td>{{ $deductible->StartingDate }}</td>
                            <td>{{ $deductible->Debit }}</td>
                            <td>{{ $deductible->Credit }}</td>
                            <td>
                              <!-- Button to trigger modal for account deletion -->
                              <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $deductible->id) }}')">Delete</button>
                          </td>
                        </tr>
                          @php
                          $deductibleDebit += $deductible->Debit;
                          $deductibleCredit += $deductible->Credit;
                          @endphp
                      @endforeach
                      <tr>
                        <td class="card-description">Total Balance</td>
                        <td >{{ $deductibleCredit - $deductibleDebit }}</td>
                        <td colspan="5"></td>
                      </tr>

              {{--  Deductible  end --}}

                  {{--  Officer  start --}}
                        <tr>
                          <td colspan="7" style="color: rgb(139, 228, 80);">Officer's Compensation </td>
                        </tr>

                        @php
                        $OfficerDebit = 0;
                        $OfficerCredit = 0;
                    @endphp
                          @foreach($officer as $Officer)
                              <tr>
                                  <td>{{ $Officer->Category }}</td>
                                  <td><a href="{{ route('accounts.show',$Officer->id) }}">{{ $Officer->name }}  </a></td>
                                  <td>{{ $Officer->Code }}</td>
                                  <td>{{ $Officer->StartingDate }}</td>
                                  <td>{{ $Officer->Debit }}</td>
                                  <td>{{ $Officer->Credit }}</td>
                                  <td>
                                    <!-- Button to trigger modal for account deletion -->
                                    <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Officer->id) }}')">Delete</button>
                                </td>
                              </tr>
                                @php
                                $OfficerDebit += $Officer->Debit;
                                $OfficerCredit += $Officer->Credit;
                                @endphp
                            @endforeach
                            <tr>
                              <td class="card-description">Total Balance</td>
                              <td >{{ $OfficerCredit - $OfficerDebit }}</td>
                              <td colspan="5"></td>
                            </tr>

                    {{--  Officer  end --}}

                     {{--  Charitable  start --}}
                     <tr>
                      <td colspan="7" style="color: rgb(139, 228, 80);">Charitable Contributions  </td>
                    </tr>

                    @php
                    $CharitableDebit = 0;
                    $CharitableCredit = 0;
                @endphp
                      @foreach($charitable as $Charitable)
                          <tr>
                              <td>{{ $Charitable->Category }}</td>
                              <td><a href="{{ route('accounts.show',$Charitable->id) }}">{{ $Charitable->name }}  </a></td>
                              <td>{{ $Charitable->Code }}</td>
                              <td>{{ $Charitable->StartingDate }}</td>
                              <td>{{ $Charitable->Debit }}</td>
                              <td>{{ $Charitable->Credit }}</td>
                              <td>
                                <!-- Button to trigger modal for account deletion -->
                                <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Charitable->id) }}')">Delete</button>
                            </td>
                          </tr>
                            @php
                            $CharitableDebit += $Charitable->Debit;
                            $CharitableCredit += $Charitable->Credit;
                            @endphp
                        @endforeach
                        <tr>
                          <td class="card-description">Total Balance</td>
                          <td >{{ $CharitableCredit - $CharitableDebit }}</td>
                          <td colspan="5"></td>
                        </tr>

                {{--  Charitable  end --}}

                 {{--  Bad Debts  start --}}
                        <tr>
                          <td colspan="7" style="color: rgb(139, 228, 80);">Bad Debts   </td>
                        </tr>
    
                        @php
                        $BadDebitsDebit = 0;
                        $BadDebitsCredit = 0;
                    @endphp
                          @foreach($badDebits as $BadDebits)
                              <tr>
                                  <td>{{ $BadDebits->Category }}</td>
                                  <td><a href="{{ route('accounts.show',$BadDebits->id) }}">{{ $BadDebits->name }}  </a></td>
                                  <td>{{ $BadDebits->Code }}</td>
                                  <td>{{ $BadDebits->StartingDate }}</td>
                                  <td>{{ $BadDebits->Debit }}</td>
                                  <td>{{ $BadDebits->Credit }}</td>
                                  <td>
                                    <!-- Button to trigger modal for account deletion -->
                                    <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $BadDebits->id) }}')">Delete</button>
                                </td>
                              </tr>
                                @php
                                $BadDebitsDebit += $BadDebits->Debit;
                                $BadDebitsCredit += $BadDebits->Credit;
                                @endphp
                            @endforeach
                            <tr>
                              <td class="card-description">Total Balance</td>
                              <td >{{ $BadDebitsCredit - $BadDebitsDebit }}</td>
                              <td colspan="5"></td>
                            </tr>
    
                    {{--  Bad Debts  end --}}

                    {{--  future  start --}}
                            <tr>
                              <td colspan="7" style="color: rgb(139, 228, 80);">Reserved for Future Use   </td>
                            </tr>
        
                            @php
                            $FutureDebit = 0;
                            $FutureCredit = 0;
                        @endphp
                              @foreach($future as $Future)
                                  <tr>
                                      <td>{{ $Future->Category }}</td>
                                      <td><a href="{{ route('accounts.show',$Future->id) }}">{{ $Future->name }}  </a></td>
                                      <td>{{ $Future->Code }}</td>
                                      <td>{{ $Future->StartingDate }}</td>
                                      <td>{{ $Future->Debit }}</td>
                                      <td>{{ $Future->Credit }}</td>
                                      <td>
                                        <!-- Button to trigger modal for account deletion -->
                                        <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Future->id) }}')">Delete</button>
                                    </td>
                                  </tr>
                                    @php
                                    $FutureDebit += $Future->Debit;
                                    $FutureCredit += $Future->Credit;
                                    @endphp
                                @endforeach
                                <tr>
                                  <td class="card-description">Total Balance</td>
                                  <td >{{ $FutureCredit - $FutureDebit }}</td>
                                  <td colspan="5"></td>
                                </tr>
        
                        {{--  Future  end --}}

                                 {{--  Employee Benefits  start --}}
                                 <tr>
                                  <td colspan="7" style="color: rgb(139, 228, 80);">Employee Benefits </td>
                                </tr>
            
                                @php
                                $EmployeeDebit = 0;
                                $EmployeeCredit = 0;
                            @endphp
                                  @foreach($employee as $Employee)
                                      <tr>
                                          <td>{{ $Employee->Category }}</td>
                                          <td><a href="{{ route('accounts.show',$Employee->id) }}">{{ $Employee->name }}  </a></td>
                                          <td>{{ $Employee->Code }}</td>
                                          <td>{{ $Employee->StartingDate }}</td>
                                          <td>{{ $Employee->Debit }}</td>
                                          <td>{{ $Employee->Credit }}</td>
                                          <td>
                                            <!-- Button to trigger modal for account deletion -->
                                            <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Employee->id) }}')">Delete</button>
                                        </td>
                                      </tr>
                                        @php
                                        $EmployeeDebit += $Employee->Debit;
                                        $EmployeeCredit += $Employee->Credit;
                                        @endphp
                                    @endforeach
                                    <tr>
                                      <td class="card-description">Total Balance</td>
                                      <td >{{ $EmployeeCredit - $EmployeeDebit }}</td>
                                      <td colspan="5"></td>
                                    </tr>
            
                            {{--  Employee Benefits  end --}}

                             {{--   Insurance  start --}}
                                          <tr>
                                            <td colspan="7" style="color: rgb(139, 228, 80);">insurance  </td>
                                          </tr>
                      
                                          @php
                                          $InsuranceDebit = 0;
                                          $InsuranceCredit = 0;
                                      @endphp
                                            @foreach($insurance as $Insurance)
                                                <tr>
                                                    <td>{{ $Insurance->Category }}</td>
                                                    <td><a href="{{ route('accounts.show',$Insurance->id) }}">{{ $Insurance->name }}  </a></td>
                                                    <td>{{ $Insurance->Code }}</td>
                                                    <td>{{ $Insurance->StartingDate }}</td>
                                                    <td>{{ $Insurance->Debit }}</td>
                                                    <td>{{ $Insurance->Credit }}</td>
                                                    <td>
                                                      <!-- Button to trigger modal for account deletion -->
                                                      <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Insurance->id) }}')">Delete</button>
                                                  </td>
                                                </tr>
                                                  @php
                                                  $InsuranceDebit += $Insurance->Debit;
                                                  $InsuranceCredit += $Insurance->Credit;
                                                  @endphp
                                              @endforeach
                                              <tr>
                                                <td class="card-description">Total Balance</td>
                                                <td >{{ $InsuranceCredit - $InsuranceDebit }}</td>
                                                <td colspan="5"></td>
                                              </tr>
                      
                                      {{--  Insurance   end --}}

                                       {{--   Interest  start --}}
                                       <tr>
                                        <td colspan="7" style="color: rgb(139, 228, 80);">Interest  </td>
                                      </tr>
                  
                                      @php
                                      $InterestExDebit = 0;
                                      $InterestExCredit = 0;
                                  @endphp
                                        @foreach($interestEx as $InterestEx)
                                            <tr>
                                                <td>{{ $InterestEx->Category }}</td>
                                                <td><a href="{{ route('accounts.show',$InterestEx->id) }}">{{ $InterestEx->name }}  </a></td>
                                                <td>{{ $InterestEx->Code }}</td>
                                                <td>{{ $InterestEx->StartingDate }}</td>
                                                <td>{{ $InterestEx->Debit }}</td>
                                                <td>{{ $InterestEx->Credit }}</td>
                                                <td>
                                                  <!-- Button to trigger modal for account deletion -->
                                                  <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $InterestEx->id) }}')">Delete</button>
                                              </td>
                                            </tr>
                                              @php
                                              $InterestExDebit += $InterestEx->Debit;
                                              $InterestExCredit += $InterestEx->Credit;
                                              @endphp
                                          @endforeach
                                          <tr>
                                            <td class="card-description">Total Balance</td>
                                            <td >{{ $InterestExCredit - $InterestExDebit }}</td>
                                            <td colspan="5"></td>
                                          </tr>
                  
                                  {{--  Interest   end --}}

                                  {{--   Mortgage  start --}}
                                                  <tr>
                                                    <td colspan="7" style="color: rgb(139, 228, 80);">Mortgage  </td>
                                                  </tr>
                              
                                                  @php
                                                  $MortgageDebit = 0;
                                                  $MortgageCredit = 0;
                                              @endphp
                                                    @foreach($mortgage as $Mortgage)
                                                        <tr>
                                                            <td>{{ $Mortgage->Category }}</td>
                                                            <td><a href="{{ route('accounts.show',$Mortgage->id) }}">{{ $Mortgage->name }}  </a></td>
                                                            <td>{{ $Mortgage->Code }}</td>
                                                            <td>{{ $Mortgage->StartingDate }}</td>
                                                            <td>{{ $Mortgage->Debit }}</td>
                                                            <td>{{ $Mortgage->Credit }}</td>
                                                            <td>
                                                              <!-- Button to trigger modal for account deletion -->
                                                              <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Mortgage->id) }}')">Delete</button>
                                                          </td>
                                                        </tr>
                                                          @php
                                                          $MortgageDebit += $Mortgage->Debit;
                                                          $MortgageCredit += $Mortgage->Credit;
                                                          @endphp
                                                      @endforeach
                                                      <tr>
                                                        <td class="card-description">Total Balance</td>
                                                        <td >{{ $MortgageCredit - $MortgageDebit }}</td>
                                                        <td colspan="5"></td>
                                                      </tr>
                              
                                              {{--  Mortgage   end --}}

                                              {{--   Professional Fees  start --}}
                                                             <tr>
                                                              <td colspan="7" style="color: rgb(139, 228, 80);">Professional Fees  </td>
                                                            </tr>
                                        
                                                            @php
                                                            $ProfessionalDebit = 0;
                                                            $ProfessionalCredit = 0;
                                                        @endphp
                                                              @foreach($professional as $Professional)
                                                                  <tr>
                                                                      <td>{{ $Professional->Category }}</td>
                                                                      <td><a href="{{ route('accounts.show',$Professional->id) }}">{{ $Professional->name }}  </a></td>
                                                                      <td>{{ $Professional->Code }}</td>
                                                                      <td>{{ $Professional->StartingDate }}</td>
                                                                      <td>{{ $Professional->Debit }}</td>
                                                                      <td>{{ $Professional->Credit }}</td>
                                                                      <td>
                                                                        <!-- Button to trigger modal for account deletion -->
                                                                        <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Professional->id) }}')">Delete</button>
                                                                    </td>
                                                                  </tr>
                                                                    @php
                                                                    $ProfessionalDebit += $Professional->Debit;
                                                                    $ProfessionalCredit += $Professional->Credit;
                                                                    @endphp
                                                                @endforeach
                                                                <tr>
                                                                  <td class="card-description">Total Balance</td>
                                                                  <td >{{ $ProfessionalCredit - $ProfessionalDebit }}</td>
                                                                  <td colspan="5"></td>
                                                                </tr>
                                        
                                                        {{--  Professional   end --}}
                                
                                  {{--   Office Expense  start --}}
                                  <tr>
                                    <td colspan="7" style="color: rgb(139, 228, 80);">Office Expense  </td>
                                  </tr>
              
                                  @php
                                  $OfficeDebit = 0;
                                  $OfficeCredit = 0;
                              @endphp
                                    @foreach($office as $Office)
                                        <tr>
                                            <td>{{ $Office->Category }}</td>
                                            <td><a href="{{ route('accounts.show',$Office->id) }}">{{ $Office->name }}  </a></td>
                                            <td>{{ $Office->Code }}</td>
                                            <td>{{ $Office->StartingDate }}</td>
                                            <td>{{ $Office->Debit }}</td>
                                            <td>{{ $Office->Credit }}</td>
                                            <td>
                                              <!-- Button to trigger modal for account deletion -->
                                              <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Office->id) }}')">Delete</button>
                                          </td>
                                        </tr>
                                          @php
                                          $OfficeDebit += $Office->Debit;
                                          $OfficeCredit += $Office->Credit;
                                          @endphp
                                      @endforeach
                                      <tr>
                                        <td class="card-description">Total Balance</td>
                                        <td >{{ $OfficeCredit - $OfficeDebit }}</td>
                                        <td colspan="5"></td>
                                      </tr>
              
                              {{--  Office   end --}}

                         {{--   Pension   Expense  start --}}
                         <tr>
                          <td colspan="7" style="color: rgb(139, 228, 80);">Pension & Profit Sharing  </td>
                        </tr>
    
                        @php
                        $PensionDebit = 0;
                        $PensionCredit = 0;
                    @endphp
                          @foreach($pension as $Pension)
                              <tr>
                                  <td>{{ $Pension->Category }}</td>
                                  <td><a href="{{ route('accounts.show',$Pension->id) }}">{{ $Pension->name }}  </a></td>
                                  <td>{{ $Pension->Code }}</td>
                                  <td>{{ $Pension->StartingDate }}</td>
                                  <td>{{ $Pension->Debit }}</td>
                                  <td>{{ $Pension->Credit }}</td>
                                  <td>
                                    <!-- Button to trigger modal for account deletion -->
                                    <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Pension->id) }}')">Delete</button>
                                </td>
                              </tr>
                                @php
                                $PensionDebit += $Pension->Debit;
                                $PensionCredit += $Pension->Credit;
                                @endphp
                            @endforeach
                            <tr>
                              <td class="card-description">Total Balance</td>
                              <td >{{ $PensionCredit - $PensionDebit }}</td>
                              <td colspan="5"></td>
                            </tr>
    
                    {{--  pension   end --}}

               {{--      rentEX  start --}}
               <tr>
                <td colspan="7" style="color: rgb(139, 228, 80);">Rent / Lease: Equipment  </td>
              </tr>

              @php
              $RentEXDebit = 0;
              $RentEXCredit = 0;
          @endphp
                @foreach($rentEX as $RentEX)
                    <tr>
                        <td>{{ $RentEX->Category }}</td>
                        <td><a href="{{ route('accounts.show',$RentEX->id) }}">{{ $RentEX->name }}  </a></td>
                        <td>{{ $RentEX->Code }}</td>
                        <td>{{ $RentEX->StartingDate }}</td>
                        <td>{{ $RentEX->Debit }}</td>
                        <td>{{ $RentEX->Credit }}</td>
                        <td>
                          <!-- Button to trigger modal for account deletion -->
                          <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $RentEX->id) }}')">Delete</button>
                      </td>
                    </tr>
                      @php
                      $RentEXDebit += $RentEX->Debit;
                      $RentEXCredit += $RentEX->Credit;
                      @endphp
                  @endforeach
                  <tr>
                    <td class="card-description">Total Balance</td>
                    <td >{{ $RentEXCredit - $RentEXDebit }}</td>
                    <td colspan="5"></td>
                  </tr>

          {{--  rentEX   end --}}

         {{--      rentPro  start --}}
                <tr>
                  <td colspan="7" style="color: rgb(139, 228, 80);">Rent / Lease: Property  </td>
                </tr>
  
                @php
                $RentProDebit = 0;
                $RentProCredit = 0;
            @endphp
                  @foreach($rentPro as $RentPro)
                      <tr>
                          <td>{{ $RentPro->Category }}</td>
                          <td><a href="{{ route('accounts.show',$RentPro->id) }}">{{ $RentPro->name }}  </a></td>
                          <td>{{ $RentPro->Code }}</td>
                          <td>{{ $RentPro->StartingDate }}</td>
                          <td>{{ $RentPro->Debit }}</td>
                          <td>{{ $RentPro->Credit }}</td>
                          <td>
                            <!-- Button to trigger modal for account deletion -->
                            <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $RentPro->id) }}')">Delete</button>
                        </td>
                      </tr>
                        @php
                        $RentProDebit += $RentPro->Debit;
                        $RentProCredit += $RentPro->Credit;
                        @endphp
                    @endforeach
                    <tr>
                      <td class="card-description">Total Balance</td>
                      <td >{{ $RentProCredit - $RentProDebit }}</td>
                      <td colspan="5"></td>
                    </tr>
  
            {{--  RentPro   end --}}

            {{--      Repair / Maintenance  start --}}
                <tr>
                  <td colspan="7" style="color: rgb(139, 228, 80);">Repair / Maintenance </td>
                </tr>
  
                @php
                $RepairDebit = 0;
                $RepairCredit = 0;
            @endphp
                  @foreach($repair as $Repair)
                      <tr>
                          <td>{{ $Repair->Category }}</td>
                          <td><a href="{{ route('accounts.show',$Repair->id) }}">{{ $Repair->name }}  </a></td>
                          <td>{{ $Repair->Code }}</td>
                          <td>{{ $Repair->StartingDate }}</td>
                          <td>{{ $Repair->Debit }}</td>
                          <td>{{ $Repair->Credit }}</td>
                          <td>
                            <!-- Button to trigger modal for account deletion -->
                            <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Repair->id) }}')">Delete</button>
                        </td>
                      </tr>
                        @php
                        $RepairDebit += $Repair->Debit;
                        $RepairCredit += $Repair->Credit;
                        @endphp
                    @endforeach
                    <tr>
                      <td class="card-description">Total Balance</td>
                      <td >{{ $RepairCredit - $RepairDebit }}</td>
                      <td colspan="5"></td>
                    </tr>
  
            {{--  repair   end --}}

            {{--      Supplies Non Inventory  start --}}
                 <tr>
                  <td colspan="7" style="color: rgb(139, 228, 80);">Supplies Non Inventory </td>
                </tr>
  
                @php
                $SuppliesDebit = 0;
                $SuppliesCredit = 0;
            @endphp
                  @foreach($supplies as $Supplies)
                      <tr>
                          <td>{{ $Supplies->Category }}</td>
                          <td><a href="{{ route('accounts.show',$Supplies->id) }}">{{ $Supplies->name }}  </a></td>
                          <td>{{ $Supplies->Code }}</td>
                          <td>{{ $Supplies->StartingDate }}</td>
                          <td>{{ $Supplies->Debit }}</td>
                          <td>{{ $Supplies->Credit }}</td>
                          <td>
                            <!-- Button to trigger modal for account deletion -->
                            <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Supplies->id) }}')">Delete</button>
                        </td>
                      </tr>
                        @php
                        $SuppliesDebit += $Supplies->Debit;
                        $SuppliesCredit += $Supplies->Credit;
                        @endphp
                    @endforeach
                    <tr>
                      <td class="card-description">Total Balance</td>
                      <td >{{ $SuppliesCredit - $SuppliesDebit }}</td>
                      <td colspan="5"></td>
                    </tr>
  
            {{--  supplies   end --}}


            {{--      Taxes / Licenses  start --}}
            <tr>
              <td colspan="7" style="color: rgb(139, 228, 80);">Taxes / Licenses </td>
            </tr>

            @php
            $TaxesDebit = 0;
            $TaxesCredit = 0;
        @endphp
              @foreach($taxes as $Taxes)
                  <tr>
                      <td>{{ $Taxes->Category }}</td>
                      <td><a href="{{ route('accounts.show',$Taxes->id) }}">{{ $Taxes->name }}  </a></td>
                      <td>{{ $Taxes->Code }}</td>
                      <td>{{ $Taxes->StartingDate }}</td>
                      <td>{{ $Taxes->Debit }}</td>
                      <td>{{ $Taxes->Credit }}</td>
                      <td>
                        <!-- Button to trigger modal for account deletion -->
                        <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Taxes->id) }}')">Delete</button>
                    </td>
                  </tr>
                    @php
                    $TaxesDebit += $Taxes->Debit;
                    $TaxesCredit += $Taxes->Credit;
                    @endphp
                @endforeach
                <tr>
                  <td class="card-description">Total Balance</td>
                  <td >{{ $TaxesCredit - $TaxesDebit }}</td>
                  <td colspan="5"></td>
                </tr>

        {{--  taxes   end --}}

             {{--       travel  start --}}
             <tr>
              <td colspan="7" style="color: rgb(139, 228, 80);">Travel </td>
            </tr>

            @php
            $TravelDebit = 0;
            $TravelCredit = 0;
        @endphp
              @foreach($travel as $Travel)
                  <tr>
                      <td>{{ $Travel->Category }}</td>
                      <td><a href="{{ route('accounts.show',$Travel->id) }}">{{ $Travel->name }}  </a></td>
                      <td>{{ $Travel->Code }}</td>
                      <td>{{ $Travel->StartingDate }}</td>
                      <td>{{ $Travel->Debit }}</td>
                      <td>{{ $Travel->Credit }}</td>
                      <td>
                        <!-- Button to trigger modal for account deletion -->
                        <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Travel->id) }}')">Delete</button>
                    </td>
                  </tr>
                    @php
                    $TravelDebit += $Travel->Debit;
                    $TravelCredit += $Travel->Credit;
                    @endphp
                @endforeach
                <tr>
                  <td class="card-description">Total Balance</td>
                  <td >{{ $TravelCredit - $TravelDebit }}</td>
                  <td colspan="5"></td>
                </tr>

        {{--  travel   end --}}

        {{--       meals  start --}}
              <tr>
                <td colspan="7" style="color: rgb(139, 228, 80);">Meals </td>
              </tr>
  
              @php
              $MealsDebit = 0;
              $MealsCredit = 0;
          @endphp
                @foreach($meals as $Meals)
                    <tr>
                        <td>{{ $Meals->Category }}</td>
                        <td><a href="{{ route('accounts.show',$Meals->id) }}">{{ $Meals->name }}  </a></td>
                        <td>{{ $Meals->Code }}</td>
                        <td>{{ $Meals->StartingDate }}</td>
                        <td>{{ $Meals->Debit }}</td>
                        <td>{{ $Meals->Credit }}</td>
                        <td>
                          <!-- Button to trigger modal for account deletion -->
                          <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Meals->id) }}')">Delete</button>
                      </td>
                    </tr>
                      @php
                      $MealsDebit += $Meals->Debit;
                      $MealsCredit += $Meals->Credit;
                      @endphp
                  @endforeach
                  <tr>
                    <td class="card-description">Total Balance</td>
                    <td >{{ $MealsCredit - $MealsDebit }}</td>
                    <td colspan="5"></td>
                  </tr>
  
          {{--  meals   end --}}

          {{--       Utilities  start --}}
                  <tr>
                    <td colspan="7" style="color: rgb(139, 228, 80);">Utilities </td>
                  </tr>
      
                  @php
                  $UtilitiesDebit = 0;
                  $UtilitiesCredit = 0;
              @endphp
                    @foreach($utilities as $Utilities)
                        <tr>
                            <td>{{ $Utilities->Category }}</td>
                            <td><a href="{{ route('accounts.show',$Utilities->id) }}">{{ $Utilities->name }}  </a></td>
                            <td>{{ $Utilities->Code }}</td>
                            <td>{{ $Utilities->StartingDate }}</td>
                            <td>{{ $Utilities->Debit }}</td>
                            <td>{{ $Utilities->Credit }}</td>
                            <td>
                              <!-- Button to trigger modal for account deletion -->
                              <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Utilities->id) }}')">Delete</button>
                          </td>
                        </tr>
                          @php
                          $UtilitiesDebit += $Utilities->Debit;
                          $UtilitiesCredit += $Utilities->Credit;
                          @endphp
                      @endforeach
                      <tr>
                        <td class="card-description">Total Balance</td>
                        <td >{{ $UtilitiesCredit - $UtilitiesDebit }}</td>
                        <td colspan="5"></td>
                      </tr>
      
              {{--  Utilities   end --}}

                  {{--       Salary & Wages  start --}}
                  <tr>
                    <td colspan="7" style="color: rgb(139, 228, 80);">Salary & Wages </td>
                  </tr>
      
                  @php
                  $SalaryDebit = 0;
                  $SalaryCredit = 0;
              @endphp
                    @foreach($salary as $Salary)
                        <tr>
                            <td>{{ $Salary->Category }}</td>
                            <td><a href="{{ route('accounts.show',$Salary->id) }}">{{ $Salary->name }}  </a></td>
                            <td>{{ $Salary->Code }}</td>
                            <td>{{ $Salary->StartingDate }}</td>
                            <td>{{ $Salary->Debit }}</td>
                            <td>{{ $Salary->Credit }}</td>
                            <td>
                              <!-- Button to trigger modal for account deletion -->
                              <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Salary->id) }}')">Delete</button>
                          </td>
                        </tr>
                          @php
                          $SalaryDebit += $Salary->Debit;
                          $SalaryCredit += $Salary->Credit;
                          @endphp
                      @endforeach
                      <tr>
                        <td class="card-description">Total Balance</td>
                        <td >{{ $SalaryCredit - $SalaryDebit }}</td>
                        <td colspan="5"></td>
                      </tr>
      
              {{--  Salary & Wages   end --}}

              {{--       Other Expenses  start --}}
                 <tr>
                  <td colspan="7" style="color: rgb(139, 228, 80);">Other Expenses </td>
                </tr>
    
                @php
                $OtherExDebit = 0;
                $OtherExCredit = 0;
            @endphp
                  @foreach($otherEx as $OtherEx)
                      <tr>
                          <td>{{ $OtherEx->Category }}</td>
                          <td><a href="{{ route('accounts.show',$OtherEx->id) }}">{{ $OtherEx->name }}  </a></td>
                          <td>{{ $OtherEx->Code }}</td>
                          <td>{{ $OtherEx->StartingDate }}</td>
                          <td>{{ $OtherEx->Debit }}</td>
                          <td>{{ $OtherEx->Credit }}</td>
                          <td>
                            <!-- Button to trigger modal for account deletion -->
                            <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $OtherEx->id) }}')">Delete</button>
                        </td>
                      </tr>
                        @php
                        $OtherExDebit += $OtherEx->Debit;
                        $OtherExCredit += $OtherEx->Credit;
                        @endphp
                    @endforeach
                    <tr>
                      <td class="card-description">Total Balance</td>
                      <td >{{ $OtherExCredit - $OtherExDebit }}</td>
                      <td colspan="5"></td>
                    </tr>
    
            {{--  Other Expenses   end --}}

            {{--       Advertising   start --}}
            <tr>
              <td colspan="7" style="color: rgb(139, 228, 80);">Advertising  </td>
            </tr>

            @php
            $AdDebit = 0;
            $AdCredit = 0;
        @endphp
              @foreach($ad as $Ad)
                  <tr>
                      <td>{{ $Ad->Category }}</td>
                      <td><a href="{{ route('accounts.show',$Ad->id) }}">{{ $Ad->name }}  </a></td>
                      <td>{{ $Ad->Code }}</td>
                      <td>{{ $Ad->StartingDate }}</td>
                      <td>{{ $Ad->Debit }}</td>
                      <td>{{ $Ad->Credit }}</td>
                      <td>
                        <!-- Button to trigger modal for account deletion -->
                        <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Ad->id) }}')">Delete</button>
                    </td>
                  </tr>
                    @php
                    $AdDebit += $Ad->Debit;
                    $AdCredit += $Ad->Credit;
                    @endphp
                @endforeach
                <tr>
                  <td class="card-description">Total Balance</td>
                  <td >{{ $AdCredit - $AdDebit }}</td>
                  <td colspan="5"></td>
                </tr>

        {{--  Advertising    end --}}

        {{--       Vehicle   start --}}
                  <tr>
                    <td colspan="7" style="color: rgb(139, 228, 80);">Vehicle  </td>
                  </tr>
      
                  @php
                  $VehicleDebit = 0;
                  $VehicleCredit = 0;
              @endphp
                    @foreach($vehicle as $Vehicle)
                        <tr>
                            <td>{{ $Vehicle->Category }}</td>
                            <td><a href="{{ route('accounts.show',$Vehicle->id) }}">{{ $Vehicle->name }}  </a></td>
                            <td>{{ $Vehicle->Code }}</td>
                            <td>{{ $Vehicle->StartingDate }}</td>
                            <td>{{ $Vehicle->Debit }}</td>
                            <td>{{ $Vehicle->Credit }}</td>
                            <td>
                              <!-- Button to trigger modal for account deletion -->
                              <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Vehicle->id) }}')">Delete</button>
                          </td>
                        </tr>
                          @php
                          $VehicleDebit += $Vehicle->Debit;
                          $VehicleCredit += $Vehicle->Credit;
                          @endphp
                      @endforeach
                      <tr>
                        <td class="card-description">Total Balance</td>
                        <td >{{ $VehicleCredit - $VehicleDebit }}</td>
                        <td colspan="5"></td>
                      </tr>
      
              {{--  Vehicle    end --}}   

              {{--       Commission & Fees   start --}}
                  <tr>
                    <td colspan="7" style="color: rgb(139, 228, 80);">Commission & Fees  </td>
                  </tr>
      
                  @php
                  $CommissionDebit = 0;
                  $CommissionCredit = 0;
              @endphp
                    @foreach($commission as $Commission)
                        <tr>
                            <td>{{ $Commission->Category }}</td>
                            <td><a href="{{ route('accounts.show',$Commission->id) }}">{{ $Commission->name }}  </a></td>
                            <td>{{ $Commission->Code }}</td>
                            <td>{{ $Commission->StartingDate }}</td>
                            <td>{{ $Commission->Debit }}</td>
                            <td>{{ $Commission->Credit }}</td>
                            <td>
                              <!-- Button to trigger modal for account deletion -->
                              <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Commission->id) }}')">Delete</button>
                          </td>
                        </tr>
                          @php
                          $CommissionDebit += $Commission->Debit;
                          $CommissionCredit += $Commission->Credit;
                          @endphp
                      @endforeach
                      <tr>
                        <td class="card-description">Total Balance</td>
                        <td >{{ $CommissionCredit - $CommissionDebit }}</td>
                        <td colspan="5"></td>
                      </tr>
      
              {{--  Commission & Fees    end --}}

                {{--       Contract Labor   start --}}
                <tr>
                  <td colspan="7" style="color: rgb(139, 228, 80);">Contract Labor  </td>
                </tr>
    
                @php
                $ContractDebit = 0;
                $ContractCredit = 0;
            @endphp
                  @foreach($contract as $Contract)
                      <tr>
                          <td>{{ $Contract->Category }}</td>
                          <td><a href="{{ route('accounts.show',$Contract->id) }}">{{ $Contract->name }}  </a></td>
                          <td>{{ $Contract->Code }}</td>
                          <td>{{ $Contract->StartingDate }}</td>
                          <td>{{ $Contract->Debit }}</td>
                          <td>{{ $Contract->Credit }}</td>
                          <td>
                            <!-- Button to trigger modal for account deletion -->
                            <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Contract->id) }}')">Delete</button>
                        </td>
                      </tr>
                        @php
                        $ContractDebit += $Contract->Debit;
                        $ContractCredit += $Contract->Credit;
                        @endphp
                    @endforeach
                    <tr>
                      <td class="card-description">Total Balance</td>
                      <td >{{ $ContractCredit - $ContractDebit }}</td>
                      <td colspan="5"></td>
                    </tr>
    
            {{--  Contract     end --}}   


                {{--       Depletion    start --}}
                <tr>
                  <td colspan="7" style="color: rgb(139, 228, 80);">Depletion   </td>
                </tr>
    
                @php
                $DepletDebit = 0;
                $DepletCredit = 0;
            @endphp
                  @foreach($deplet as $Deplet)
                      <tr>
                          <td>{{ $Deplet->Category }}</td>
                          <td><a href="{{ route('accounts.show',$Deplet->id) }}">{{ $Deplet->name }}  </a></td>
                          <td>{{ $Deplet->Code }}</td>
                          <td>{{ $Deplet->StartingDate }}</td>
                          <td>{{ $Deplet->Debit }}</td>
                          <td>{{ $Deplet->Credit }}</td>
                          <td>
                            <!-- Button to trigger modal for account deletion -->
                            <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Deplet->id) }}')">Delete</button>
                        </td>
                      </tr>
                        @php
                        $DepletDebit += $Deplet->Debit;
                        $DepletCredit += $Deplet->Credit;
                        @endphp
                    @endforeach
                    <tr>
                      <td class="card-description">Total Balance</td>
                      <td >{{ $DepletCredit - $DepletDebit }}</td>
                      <td colspan="5"></td>
                    </tr>
    
            {{--  Depletion     end --}}   

               {{--       Depreciation    start --}}
               <tr>
                <td colspan="7" style="color: rgb(139, 228, 80);">Depreciation   </td>
              </tr>
  
              @php
              $DepreciationDebit = 0;
              $DepreciationCredit = 0;
          @endphp
                @foreach($depreciation as $Depreciation)
                    <tr>
                        <td>{{ $Depreciation->Category }}</td>
                        <td><a href="{{ route('accounts.show',$Depreciation->id) }}">{{ $Depreciation->name }}  </a></td>
                        <td>{{ $Depreciation->Code }}</td>
                        <td>{{ $Depreciation->StartingDate }}</td>
                        <td>{{ $Depreciation->Debit }}</td>
                        <td>{{ $Depreciation->Credit }}</td>
                        <td>
                          <!-- Button to trigger modal for account deletion -->
                          <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $Depreciation->id) }}')">Delete</button>
                      </td>
                    </tr>
                      @php
                      $DepreciationDebit += $Depreciation->Debit;
                      $DepreciationCredit += $Depreciation->Credit;
                      @endphp
                  @endforeach
                  <tr>
                    <td class="card-description">Total Balance</td>
                    <td >{{ $DepreciationCredit - $DepreciationDebit }}</td>
                    <td colspan="5"></td>
                  </tr>
  
          {{--  Depreciation     end --}}   



                 {{--  Expense card end --}}



                  </tbody>
              </table><br>
    
          </div>
      </div>
  </div>
</div>


{{-- trail end --}}



</div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5 " id="exampleModalLabel">Delete Journal Details</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form method="POST" >
                    @method('delete')
                    @csrf
                  <div class="modal-body">
                    Are you sure you want to delete
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Delete</button>
                  </div>
                </form>
                </div>
              </div>
            </div>
            


{{-- model end --}}
<script>
  function showForm(url){
  
  $("#exampleModal form").attr('action', url);
  $("#exampleModal").modal("show");
  }
  
  </script>
@endsection
