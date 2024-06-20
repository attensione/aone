<!-- Page title -->
<section id="page-title" class="text-uppercase text-light" style="background-image:url(/assets/images/heading-{end($breadcumbs)}.jpg); background-size: cover; background-position: center center;">
    <div class="bg-overlay" data-style="9"></div>
    <div class="container">
        <div class="breadcrumb">
            <ul>
                 {foreach $breadcumbs as $key=>$item}
                  {if $key eq 0}
                    <li><a href="/">{$item}</a> </li>
                  {elseif (count($breadcumbs)-1) eq $key}
                    <li class="active">{$item}</li>
                  {else}
                    <li><a href="/{$item}">{$item}</a> </li>
                  {/if}
                 {/foreach}
            </ul>
        </div>
        <div class="page-title">
            <h1>{$pagetitle}</h1>
        </div>
    </div>
</section>
<!-- end: Page title -->
