@extends('layouts.app')

@section('content')

<div class="card border-primary mb-3">
    <div class="card-header">Dashboard</div>

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

		<table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0"
		  width="100%">
		  <thead>
		    <tr>
		      <th>First name</th>
		      <th>Last name</th>
		      <th>Position</th>
		      <th>Office</th>
		      <th>Age</th>
		      <th>Start date</th>
		      <th>Salary</th>
		      <th>Extn.</th>
		      <th>E-mail</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>Tiger</td>
		      <td>Nixon</td>
		      <td>System Architect</td>
		      <td>Edinburgh</td>
		      <td>61</td>
		      <td>2011/04/25</td>
		      <td>$320,800</td>
		      <td>5421</td>
		      <td>t.nixon@datatables.net</td>
		    </tr>
		    <tr>
		      <td>Garrett</td>
		      <td>Winters</td>
		      <td>Accountant</td>
		      <td>Tokyo</td>
		      <td>63</td>
		      <td>2011/07/25</td>
		      <td>$170,750</td>
		      <td>8422</td>
		      <td>g.winters@datatables.net</td>
		    </tr>
		    <tr>
		      <td>Ashton</td>
		      <td>Cox</td>
		      <td>Junior Technical Author</td>
		      <td>San Francisco</td>
		      <td>66</td>
		      <td>2009/01/12</td>
		      <td>$86,000</td>
		      <td>1562</td>
		      <td>a.cox@datatables.net</td>
		    </tr>
		    <tr>
		      <td>Cedric</td>
		      <td>Kelly</td>
		      <td>Senior Javascript Developer</td>
		      <td>Edinburgh</td>
		      <td>22</td>
		      <td>2012/03/29</td>
		      <td>$433,060</td>
		      <td>6224</td>
		      <td>c.kelly@datatables.net</td>
		    </tr>
		  </tbody>
		</table>
    </div>
</div>

@endsection
