@extends('layouts.app')

@section('content')
<div class="container">
  <h1 align="center">  MARRIAGE REGISTRY DATABASE</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">OPTIONS</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                     <?php
                     echo "<body style='background-image:linear-gradient(red, yellow)'>";
                     ?>
                    <ol>
                        <li><a href="show">SHOW ALL DATA </a></li>
                        <li><a href="insert">INSERT DATA </a></li>
                        <li><a href="update">UPDATE DATA </a></li>
                        <li><a href="delete">DIVORCE </a></li>
                        <li><a href="search">SEARCH </a></li>
                        <li><a href="dshow">SHOW ALL DIVORCED DATA</a></li>
                <!--    <li><a href="describe_marriage">List of the columns of marriage</a></li>
                        <li><a href="describe_people">List of the columns of people</a></li>
                        <li><a href="describe_devorse">list of the columns of devorse</a></li>
                        <li><a href="select_marriage">List of the mariiage</a></li>
                        <li><a href="select_people">List of the people</a></li>
                        <li><a href="select_devorse">list of the devorse</a></li>                       
                        <li><a href="drop_column">Drop a Column </a></li>
                        <li><a href="add_column">Add a column</a></li>
                        <li><a href="modify_column">Modify a column</a></li>
                        <li><a href="update_column">Update a column</a></li>
                        <li><a href="set_key">Set primary and foriegn key</a></li>
                   
                        <li><a href="distinct">Use of distinct</a></li>
                        <li><a href="compound_comparator">Use of compound operator</a></li>
                        <li><a href="renge_condition">Use of renge search condition</a></li>
                        <li><a href="set_membership">Use of set membership</a></li>
                        <li><a href="pattern_matching">Use of pattern matching</a></li>
                        <li><a href="column_ordering">Use of order by</a></li>
                        <li><a href="multiple_column_ordering">Use of multiple column ordering</a></li>
                        <li><a href="aggregate_function_count">Use of aggregate function count and count all</a></li>
                        <li><a href="aggregate_function_sum">Use of aggregate function sum</a></li>
                        <li><a href="aggregate_function_max">Use of aggregate function max</a></li>
                        <li><a href="nvl">Use of nvl</a></li>
                        <li><a href="having">Use of having</a></li>
                   -->
                        <li><a href="aggregate_function_count">THE NUMBER OF MARRIES AND DEVORSES</a></li>
                        <li><a href="multiple_column_ordering">LIST OF THE PEOPLE BY AGE</a></li>
                        <li><a href="aggregate_function_avg">AVERAGE DOWER AMOUNT</a></li>
                        <li><a href="group_by">MARRIED PEOPLE COUNT BY RELIGION</a></li>
                        
                        

               <!--    <li><a href="join">Use of join</a></li>
                        <li><a href="natural_join">Use of natural join</a></li>
                        <li><a href="inner_join">Use of inner join</a></li>
                        <li><a href="left_outer_join">Use of left outer join</a></li>
                        <li><a href="right_outer_join">Use of right_outer join</a></li>
                        <li><a href="full_outer_join">Use of full outer join</a></li>
                        <li><a href="self_join">Use of self join</a></li>
                        
                        <li><a href="subquery">Subquery</a></li>
                        <li><a href="transaction">Transaction</a></li>
                        <li><a href="pl">pl/sql</a></li> --> 
                        

                    
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
