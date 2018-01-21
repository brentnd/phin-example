<?php

namespace Site;

use Mail;
use Phin\MarkdownMail;
use Illuminate\Routing\Controller;
use Faker\Factory as FakerFactory;

class PageController extends Controller
{
    protected $icons = ['bath', 'rocket', 'anchor', 'barcode', 'quora', 'futbol-o', 'fire', 'flask'];
    public function home()
    {
        $services = $this->fakeServices();
        return view('pages.home', compact('services'));
    }

    public function json()
    {
        return response()->json($this->fakeServices());
    }

    public function mail()
    {
        try {
            Mail::to('example@gmail.com')->send((new MarkdownMail('emails.hello'))->with('name', 'John'));
            return 'Mail send successfully';
        } catch (\Exception $e) {
            return 'Error - '.$e;
        }
    }

    public function redirect()
    {
        return redirect()->route('home')->with('redirect', 'We redirected and flashed!');
    }

    private function fakeServices()
    {
        $services = [];
        foreach (range(0, 8) as $number) {
            $services[] = $this->fakeService();
        }
        return $services;        
    }

    private function fakeService()
    {
        $faker = FakerFactory::create();
        return [
            'title' => $faker->word(),
            'icon' => $faker->randomElement($array = $this->icons),
            'content' => implode(' ', $faker->sentences(3)),
        ];
    }
}