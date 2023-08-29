<?php

namespace App\Http\Controllers\Photo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use App\Models\Photo\Cup;
// use App\Http\Resources\Photo\CupResource;
// use App\Http\Resources\PhotoCupResource;
// use App\Http\Resources\Photo\CupCollection;
// // use App\Http\Resources\;
// use App\Http\Resources\PhotoCup1Resource;

class CupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mapJs()
    {

        $t = '
ymaps.ready(init);

function init() {
    var myMap = new ymaps.Map(\'map\', {
        center: [57.751574, 55.573856],
        zoom: 5,
        controls: []
    }, {
        searchControlProvider: \'yandex#search\'
    });

';

$nn = 1;
        $e = Cup::all();
        // $e1 = [];
        foreach ($e as $v) {

            if( !empty($v->lat) && !empty($v->lon) ){

            // $n = [
            //     'id' => $v->id,
            //     'name' => $v->name,
            //     'opis' => $v->opis,
            //     'lat' => $v->lat,
            //     'lon' => $v->lon,
            //     // 'img1' => $v->img1 ?? '',

            $t .= '
                // Метка с текстом
                var placemark'.$nn.' = new ymaps.Placemark(['.$v->lon.', '.$v->lat.'], {
                    hintContent: \''.$v->name.'\',
                }, {
                    \'preset\': \'islands#greenCircleDotIcon\'
                });
                myMap.geoObjects.add(placemark'.$nn.');
                ';
                $nn++;
            }
        }

        // var placemark = new ymaps.Placemark(
        //     // myMap.getCenter(), 
        //     {
        //         // Зададим содержимое заголовка балуна.
        //         balloonContentHeader: '<a href = "#">Рога и копыта</a><br>' +
        //             '<span class="description">Сеть кинотеатров</span>',
        //         // Зададим содержимое основной части балуна.
        //         balloonContentBody: '<img src="img/cinema.jpg" height="150" width="200"> <br/> ' +
        //             '<a href="tel:+7-123-456-78-90">+7 (123) 456-78-90</a><br/>' +
        //             '<b>Ближайшие сеансы</b> <br/> Сеансов нет.',
        //         // Зададим содержимое нижней части балуна.
        //         balloonContentFooter: 'Информация предоставлена:<br/>OOO "Рога и копыта"',
        //         // Зададим содержимое всплывающей подсказки.
        //         hintContent: 'Рога и копыта'
        //     });
        // // Добавим метку на карту.
        // // myMap.geoObjects.add(placemark);
        // // Откроем балун на метке.
        // // placemark.balloon.open();

        $t .= ' } ';

        // return view('site_photo.layouts.app');
        return $t;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexShow()
    {
        return view('site_photo.layouts.app');
    }

    public function image_e($img)
    {
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/../storage/app/public/cups/' . $img)) {
            return '/storage/cups/' . $img;
        } else {
            return false;
        }
    }

    public function index()
    {
        $e = Cup::all();
        $e1 = [];
        foreach ($e as $v) {
            $n = [
                'id' => $v->id,
                'name' => $v->name,
                'opis' => $v->opis,
                'lat' => $v->lat,
                'lon' => $v->lon,
                // 'img1' => $v->img1 ?? '',
                // 'img2' => $v->img2 ?? '',
                // 'img3' => $v->img3 ?? '',
                // 'img4' => $v->img4 ?? '',
                // 'img5' => $v->img5 ?? '',
                // 'img6' => $v->img6 ?? '',
                // 'img7' => $v->img7 ?? '',
                // 'img8' => $v->img8 ?? '',
                // 'img9' => $v->img9 ?? '',
                // 'img10' => $v->img10 ?? '',
            ];

            for ($q = 1; $q <= 10; $q++) {
                // $v[] = 
                // $n['img'.$q] = $v->{'img'.$q} ?? '' ;
                $n['image' . $q] = !empty($v->{'img' . $q}) ? (self::image_e($v->{'img' . $q}) ?? '') : '';
            }
            $e1[] = $n;
        }
        // return $e1;
        // dd($e1);
        // return view('site_photo.layouts.app',['list' => [ 'data' => $e1 ] ]);
        return response()->json($e1);

        // return view('site_photo.layouts.app-add-form', $in);

        // return new CupCollection(Cup::all());
        // return new CupResource::collection(Cup::all());
        // return new PhotoCupResource::collection(Cup::all());
        // return new PhotoCup1Resource::collection(Cup::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store7(Request $request)
    {
        $new = [
            'name' => $request->input('name'),
            'lat' => $request->input('lat'),
            'lon' => $request->input('lon'),
        ];

        $in = [
            // 'warn' => 77,
            'warn1' => ['all' => $request->all() ?? 'ii']
        ];

        // echo '234234';
        // return 777;
        // $in['warn1']['start2'] = [];

        $photo_nn = 1;

        // dd( $request->input('photos') );
        $ar = $request->all();
        // dd( $ar['photos'] );
        // dd( [ __LINE__ , $request->all() ] );

        foreach ($ar['photos'] as $image) {

            // $this->validate($image, [
            //     'image' => 'required|image|mimes:jpeg,jpg|max:2048',
            // ]);

            $in['warn1']['files0'][] =
                $imageName = date('Ymd') . '.' . time() . '.' . $photo_nn . '.' . strtolower($image->getClientOriginalExtension());
            // $new['img' . $photo_nn] = '/public/cups/' . $imageName;
            $new['img' . $photo_nn] = $imageName;

            // $image->move( public_path('cups'), $imageName ); 

            $image->move($_SERVER['DOCUMENT_ROOT'] . '/../storage/app/public/cups', $imageName);

            // $request
            // ->file($image)
            // ->store('public/cups');

            // $paths[] = $imageName;
            // $new['img' . $photo_nn] = $imageName;

            // $new['img' . $photo_nn] =
            //     // $in['warn1']['files'][] =
            //     $file =
            //     $request
            //     ->file($f)
            //     ->store('public/cups');

            $photo_nn++;

            // $in['warn1']['files0'][] = Storage::url($image);
            // $in['warn1']['files0'][] = Storage::url($file);
        }



        for ($w = 1; $w <= 10; $w++) {

            // $in['warn1']['start'][$w] = 1;

            // // if (!$request->hasFile('photos' . $w)) {
            // if (
            //     $request->hasFile('photos' . $w)
            // ) {
            //     $in['warn1']['start2'][$w] = 1;
            // }

            if (
                $request->input('photos' . $w)
                // $request->hasFile('photos' . $w)
                // && $request->file('photos' . $w)->hasFile()
            ) {

                // $new['img' . $w . 'yy'] = 'xx';

                $new['img' . $photo_nn] =
                    // $in['warn1']['files'][] =
                    $file =
                    $request
                    ->file('photos' . $w)
                    ->store('public/cups');

                $photo_nn++;

                $in['warn1']['files0'][] = Storage::url($file);

                // $filename = $file->getClientOriginalName(); 
                // $in['warn1']['files'][] = $file->store('public/cups');
                // $student->image = $filename;

            }
            // else {
            //     $new['img' . $w . 'xx'] = 'xx';
            // }
        }
        $in['warn1']['new'] = $new;
        // $in['warn1']['new00'] = Cup::create($new);
        $in['warn1']['new2'] =
            $in['new_cup'] = Cup::create($new);

        return view('site_photo.layouts.app-add-form', $in);
    }


    public function showFormAdd(Request $request)
    {

        // dd(11);
        // dd($request->input());

        $in = [
            'warn' => 0,
            'warn1' => $request->input() ?? 'ii'
        ];
        $method = $request->method();
        echo $method;
        // echo $method; // распечатает слово 'get' или 'post'

        // if ($request->isMethod('get')) {
        //    // этот код выполнится, если используется метод GET
        // }
        if ($request->isMethod('post')) {
            // этот код выполнится, если используется метод POST
            Cup::insert($request);
            $in['warn'] = 'добавлено';
        }

        return view('site_photo.layouts.app-add-form', $in);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
