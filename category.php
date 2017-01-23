



<?php
<div class="container">

    <div class="page-header">
      <h1>SubCategory<small> Repository</small></h1>
    </div>

    @foreach($allSubCategories as $subCate)
    <pre>


        Parent Category {{ $subCate->name }}
        <br>
        @foreach($subCate->subCategory as $firstNestedSub)

            firstNested : {{ $firstNestedSub->name }}

            @foreach($firstNestedSub->subCategory as $secondNestedSub)
                SecondNested : {{ $secondNestedSub->name }}<br>
                
                @foreach($secondNestedSub->subCategory as $thirdNestedSub)


				$thirdNested: {{ $thirdNestedSub->name }}
                @endforeach()

            @endforeach()


        @endforeach()

    </pre>

    @endforeach()


</div>