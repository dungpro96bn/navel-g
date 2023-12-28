@extends('layouts.app')

@section('title', $page->title ?? '')

@section('content')

    <div id="topMvSlider">
        <x-mainVisual />
    </div>

    <div id="contactBox">
        <x-contentBox.contactBox />
    </div>

    <div id="template01" class="topContentBox">
        <x-contentBox.contentMovie />
        <x-contentBox.contentData />
        <x-contentBox.contentMembers />
        <x-contentBox.contentOneday />
    </div>

    <div id="telContactBanner">
        <x-contentBox.telContactBanner />
    </div>

    @if(isset($fEntSearchAxisData))
    <div id="topSearchBox">
        <x-searchBox :fEntSearchAxisData="$fEntSearchAxisData" :fEntConfig="$page->fEntConfig" />
    </div>
    @endif

    @if($page->fEntConfig->frontendSettings['isDispRecommendJob']??null)
    <div id="topRecommendJob">
        <x-recommendJob.index />
    </div>
    @endif

@endsection
