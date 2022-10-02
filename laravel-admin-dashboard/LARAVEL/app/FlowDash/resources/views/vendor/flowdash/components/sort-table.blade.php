@php
$items = [[
  'avatar' => "/vendor/flowdash/images/256_rsz_1andy-lee-642320-unsplash.jpg",
  'name' => "Jenell D. Matney", 
  'title' => "Founder and CEO"
], [
  'avatar' => "/vendor/flowdash/images/256_daniel-gaffey-1060698-unsplash.jpg",
  'name' => "Sherri J. Cardenas", 
  'title' => "Software Engineer"
], [
  'avatar' => "/vendor/flowdash/images/256_jeremy-banks-798787-unsplash.jpg",
  'name' => "Joseph S. Ferland", 
  'title' => "Web Designer"
], [
  'avatar' => "/vendor/flowdash/images/256_joao-silas-636453-unsplash.jpg",
  'name' => "Bryan K. Davis", 
  'title' => "Web Developer"
], [
  'avatar' => "/vendor/flowdash/images/256_luke-porter-261779-unsplash.jpg",
  'name' => "Elizabeth J. Ohara", 
  'title' => "Business Analyst"
], [
  'avatar' => "/vendor/flowdash/images/256_michael-dam-258165-unsplash.jpg",
  'name' => "Kaci M. Langston", 
  'title' => "Human Resources"
]];
@endphp

<div 
  data-toggle="lists" 
  data-lists-values='["js-lists-values-employee-name", "js-lists-values-employee-title"]'
  class="table-responsive">
  <table class="table table-flush">
    <thead>
      <tr>
        <th colspan="2">
          <a 
            href="javascript:void(0)" 
            class="sort" 
            data-sort="js-lists-values-employee-name">Employee name</a>
          <a 
            href="javascript:void(0)" 
            class="sort" 
            data-sort="js-lists-values-employee-title">Employee title</a>
        </th>
      </tr>
    </thead>
    <tbody class="list">
      @foreach($items as $item)
      <tr>
        <td>
          <div class="media align-items-center">
            <div class="avatar avatar-sm mr-3">
              <img src="{{ asset($item['avatar'] ?? '') }}" alt="Avatar" class="avatar-img rounded-circle">
            </div>
            <div class="media-body">
              <strong class="js-lists-values-employee-name">{{ $item['name'] ?? '' }}</strong><br>
              <span class="text-muted js-lists-values-employee-title">{{ $item['title'] ?? '' }}</span>
            </div>
          </div>
        </td>
        <td class="text-right"><a href="" class="text-muted"><i class="material-icons">more_vert</i></a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>