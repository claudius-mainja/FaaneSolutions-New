<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\TeamMember;
use App\Models\Testimonial;
use App\Models\JobListing;
use App\Models\BlogPost;
use App\Models\Statistic;

class PageController extends Controller
{
    public function home()
    {
        $services = Service::where('is_active', true)->orderBy('sort_order')->get();
        $testimonials = Testimonial::where('is_active', true)->get();
        $statistics = Statistic::where('is_active', true)->orderBy('sort_order')->get();
        $blogPosts = BlogPost::where('is_published', true)->latest()->take(3)->get();
        $teamMembers = TeamMember::where('is_active', true)->orderBy('sort_order')->take(4)->get();
        $jobs = JobListing::where('is_active', true)->where(function($q) {
            $q->whereNull('closing_date')->orWhere('closing_date', '>=', now());
        })->latest()->take(3)->get();
        return view('pages.home', compact('services', 'testimonials', 'statistics', 'blogPosts', 'teamMembers', 'jobs'));
    }

    public function about()
    {
        $teamMembers = TeamMember::where('is_active', true)->orderBy('sort_order')->get();
        $statistics = Statistic::where('is_active', true)->orderBy('sort_order')->get();
        return view('pages.about', compact('teamMembers', 'statistics'));
    }

    public function services()
    {
        $services = Service::where('is_active', true)->orderBy('sort_order')->get();
        return view('pages.services', compact('services'));
    }

    public function serviceDetail($slug)
    {
        $service = Service::where('slug', $slug)->where('is_active', true)->firstOrFail();
        $otherServices = Service::where('is_active', true)->where('id', '!=', $service->id)->orderBy('sort_order')->take(3)->get();
        return view('pages.service-detail', compact('service', 'otherServices'));
    }

    public function careers()
    {
        $jobs = JobListing::where('is_active', true)->where(function($q) {
            $q->whereNull('closing_date')->orWhere('closing_date', '>=', now());
        })->latest()->get();
        return view('pages.careers', compact('jobs'));
    }

    public function careerDetail($slug)
    {
        $job = JobListing::where('slug', $slug)->where('is_active', true)->firstOrFail();
        $otherJobs = JobListing::where('is_active', true)->where('id', '!=', $job->id)->latest()->take(3)->get();
        return view('pages.career-detail', compact('job', 'otherJobs'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function blog()
    {
        $posts = BlogPost::where('is_published', true)->latest()->paginate(9);
        $categories = BlogPost::where('is_published', true)->whereNotNull('category')->distinct()->pluck('category');
        return view('pages.blog', compact('posts', 'categories'));
    }

    public function blogPost($slug)
    {
        $post = BlogPost::where('slug', $slug)->where('is_published', true)->firstOrFail();
        $relatedPosts = BlogPost::where('is_published', true)->where('id', '!=', $post->id)->latest()->take(3)->get();
        return view('pages.blog-post', compact('post', 'relatedPosts'));
    }
}
