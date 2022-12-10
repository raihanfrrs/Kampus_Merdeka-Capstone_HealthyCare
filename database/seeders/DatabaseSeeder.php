<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Admin;
use App\Models\Patient;
use App\Models\CategoryNews;
use App\Models\CategoryDisease;
use App\Models\Disease;
use App\Models\News;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
                'username' => 'raihan123',
                'password' => bcrypt('test123'),
                'level' => 'administrator'
        ]);

        User::create([
            'username' => 'fauzi123',
            'password' => bcrypt('test123'),
            'level' => 'patient'
        ]);

        Admin::create([
            'name' => 'Raihan Farras',
            'email' => 'rehanfarras76@gmail.com',
            'phone' => '081333903187',
            'user_id' => 1
        ]);

        Patient::create([
            'name' => 'Fauzi Rahman',
            'email' => 'fauzirahman76@gmail.com',
            'phone' => '0823456765324',
            'user_id' => 2
        ]);

        CategoryNews::create([
            'category' => 'Kesehatan'
        ]);

        CategoryNews::create([
            'category' => 'Olahraga'
        ]);

        CategoryNews::create([
            'category' => 'Covid-19'
        ]);

        CategoryDisease::create([
            'category' => 'Pernafasan'
        ]);

        CategoryDisease::create([
            'category' => 'Pencernaan'
        ]);

        CategoryDisease::create([
            'category' => 'Persendian'
        ]);

        News::create([
            'admin_id' => 1,
            'category_news_id' => 1,
            'author' => 'CNN',
            'title' => '6 Kebiasaan Sehat untuk Kontrol Diabetes, Jangan Mager',
            'content' => '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at augue vehicula metus fermentum tempor. Etiam tincidunt magna nisl, nec fermentum nibh condimentum sed. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam quam orci, cursus vitae mauris ut, ultricies scelerisque diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed et nisi iaculis, convallis orci consectetur, ornare quam. Nulla tincidunt commodo dolor, sit amet volutpat mauris lacinia luctus. Sed at lorem in leo consequat bibendum. Sed pretium lobortis maximus. Phasellus sollicitudin nunc sapien, at laoreet ex sollicitudin sed. Donec vel mi at orci convallis vulputate.<br><br></div><div>Sed lacinia facilisis velit, nec auctor dui ultricies eu. Fusce dapibus, urna quis porta scelerisque, dolor libero aliquet orci, ut viverra risus magna vel mauris. Morbi ante purus, congue sit amet vestibulum in, laoreet quis augue. Aliquam mi magna, volutpat et vestibulum eget, lacinia sed lacus. Nulla id nunc elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce sodales risus nisi, nec lacinia lacus malesuada tempus. In hac habitasse platea dictumst. Maecenas a vehicula justo. In enim sapien, maximus vel mi congue, eleifend malesuada mi. Maecenas rhoncus convallis urna. Curabitur a mauris pretium, volutpat purus et, mattis risus. Integer vel enim sit amet orci convallis scelerisque. Sed scelerisque elit eget ligula maximus lacinia.<br><br></div><div>Vivamus purus ante, molestie non lobortis consequat, efficitur eu tellus. Sed ac lacinia magna. Duis et volutpat massa. Sed nisi enim, accumsan quis blandit sed, bibendum et enim. Vivamus iaculis vulputate elit ac bibendum. Nulla mattis justo at elit molestie accumsan. Donec laoreet nisi nec condimentum congue. Morbi hendrerit orci velit. Vestibulum sed consequat elit. Mauris id magna a dolor hendrerit convallis ut non lectus. Sed porta urna non neque condimentum, eu dictum neque pharetra. Sed mauris orci, dignissim ut dolor ut, accumsan fermentum urna. Fusce rutrum nulla quam, vitae bibendum neque bibendum quis. Sed nisi ligula, efficitur sed aliquet eget, ultrices sed libero. Etiam tempor nisi et arcu posuere, eget accumsan risus varius.<br><br></div><div>Nam et ante euismod nibh eleifend sodales eget vitae diam. Donec vel sem vulputate, malesuada odio sit amet, feugiat dolor. Morbi eget nulla non massa imperdiet bibendum et ut mauris. Etiam dui massa, interdum ac elementum id, mollis in velit. Etiam iaculis quis lectus et laoreet. Suspendisse vel velit a arcu imperdiet lobortis in vitae est. Proin facilisis rutrum gravida. Sed vulputate, ligula quis luctus tincidunt, lacus leo consectetur purus, sit amet vehicula erat sem eget lectus. Mauris faucibus nunc ante, ut varius dolor semper id. Etiam eu tellus erat. Proin eu tincidunt sem, eu pharetra sapien. Maecenas ut massa tellus. Nam sed auctor orci, ut commodo purus.<br><br></div><div>Suspendisse a faucibus turpis. Nam interdum, ante et tristique varius, eros ligula venenatis ipsum, vitae faucibus sapien justo a urna. Praesent vel neque ac mauris gravida gravida. Nullam nunc leo, semper vel nulla ut, condimentum sagittis elit. Phasellus scelerisque luctus varius. Mauris vitae metus vel quam posuere convallis. Duis ullamcorper metus ut eros vulputate, sed condimentum mi elementum. Nulla consequat, massa vel dapibus consectetur, est elit imperdiet lectus, eget dignissim lectus neque et nunc. Ut eu placerat diam. Nam velit ex, dignissim vel dolor id, facilisis euismod odio. Maecenas sagittis commodo nulla ut ultricies. Maecenas at leo non mi finibus dignissim ac a ante. Praesent sed felis enim. Donec vel eros eget leo facilisis pellentesque vel sed lorem.<br><br></div><div>Phasellus consectetur quam at purus lobortis, eu porta erat cursus. Proin suscipit lacinia mattis. Nulla facilisi. Mauris elementum enim nec ipsum interdum iaculis. Sed gravida elit id diam porttitor, vitae tempor nisi tristique. Fusce dignissim neque a augue sagittis, sed tincidunt ante rutrum. Suspendisse arcu urna, porttitor interdum lacinia a, tincidunt id nunc. Nullam interdum risus sit amet lorem bibendum, quis ultrices sapien iaculis. In nunc enim, vulputate et eros id, pharetra eleifend enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec sit amet nisl diam. Nam facilisis augue eget dolor blandit commodo. Mauris consequat convallis dolor, id pretium metus pulvinar ut. Maecenas et ex ultrices, porttitor lorem quis, elementum massa. Ut non gravida ligula, sed dapibus quam.<br><br></div><div>Nullam nec velit nec sem elementum consectetur sit amet ut mi. Sed egestas ullamcorper mollis. Suspendisse potenti. Curabitur at massa dictum, aliquet risus quis, rutrum nunc. Vestibulum tempus sapien nunc, et efficitur turpis scelerisque vitae. Fusce gravida, nunc non viverra scelerisque, nisl nisi faucibus lorem, eu varius diam odio et nisi. Proin ac ullamcorper est. Phasellus ut auctor arcu. Sed imperdiet neque non elit hendrerit pharetra a sit amet purus. Nam vitae mollis ante. Ut nec fermentum felis. Curabitur sapien sem, elementum et ligula at, varius luctus erat. Curabitur tincidunt lorem ac dolor blandit, eget rhoncus magna interdum. Ut condimentum massa quis erat viverra ultricies eget vel tortor.<br><br></div><div>Vestibulum quis purus sit amet arcu mollis blandit. Proin libero elit, feugiat ac metus in, convallis tincidunt orci. Aliquam erat volutpat. Praesent elit lorem, maximus ut ligula quis, molestie efficitur diam. Praesent cursus dolor sem, molestie tempor ex venenatis vel. Quisque tempor pretium laoreet. Curabitur porttitor elementum pretium.<br><br></div><div>Sed efficitur lorem eget elit convallis, ut ornare lorem euismod. Cras tempus tellus libero, in rhoncus sapien auctor nec. Nulla lectus tellus, imperdiet a porttitor ultricies, molestie id metus. Praesent et semper risus. Etiam vel laoreet nunc. Phasellus sed ante a risus laoreet viverra. Vivamus condimentum id urna a egestas. Pellentesque in purus nec justo ullamcorper ultrices. Mauris vehicula neque sit amet lectus sodales, eget commodo tortor pharetra.<br><br></div><div>Suspendisse vehicula, magna ac auctor interdum, metus sem venenatis velit, quis pulvinar ante erat at lectus. Sed quis ornare augue. Sed eu libero tincidunt, ultrices ex non, congue sapien. Mauris lectus quam, pretium vitae rhoncus ut, maximus ut ante. Donec vel massa quis ex ornare ornare ac vitae justo. Fusce hendrerit scelerisque dui ut hendrerit. Sed luctus nisi vitae lorem pharetra rhoncus. Nunc non ante id tortor pellentesque volutpat. Maecenas velit magna, sollicitudin nec leo non, facilisis sagittis metus. Integer convallis tellus ut diam vulputate porttitor. Vestibulum mollis porttitor elementum.<br><br></div>',
            'urlSource' => 'https://www.cnnindonesia.com/gaya-hidup/20221208081813-255-884436/6-kebiasaan-sehat-untuk-kontrol-diabetes-jangan-mager',
            'urlToImage' => 'https://akcdn.detik.net.id/visual/2021/01/06/ilustrasi-mager_169.jpeg?w=650',
            'file_path' => 'news-image/Ic63TjxZOU0Oe4Fy5TdcPbANuOsA6rI4WEWEA2sH.jpg'
        ]);

        News::create([
            'admin_id' => 1,
            'category_news_id' => 1,
            'author' => 'CNN',
            'title' => 'Benarkah Sering Makan Ceker Ayam Bisa Bikin Tulang Kian Kuat?',
            'content' => '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at augue vehicula metus fermentum tempor. Etiam tincidunt magna nisl, nec fermentum nibh condimentum sed. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam quam orci, cursus vitae mauris ut, ultricies scelerisque diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed et nisi iaculis, convallis orci consectetur, ornare quam. Nulla tincidunt commodo dolor, sit amet volutpat mauris lacinia luctus. Sed at lorem in leo consequat bibendum. Sed pretium lobortis maximus. Phasellus sollicitudin nunc sapien, at laoreet ex sollicitudin sed. Donec vel mi at orci convallis vulputate.<br><br></div><div>Sed lacinia facilisis velit, nec auctor dui ultricies eu. Fusce dapibus, urna quis porta scelerisque, dolor libero aliquet orci, ut viverra risus magna vel mauris. Morbi ante purus, congue sit amet vestibulum in, laoreet quis augue. Aliquam mi magna, volutpat et vestibulum eget, lacinia sed lacus. Nulla id nunc elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce sodales risus nisi, nec lacinia lacus malesuada tempus. In hac habitasse platea dictumst. Maecenas a vehicula justo. In enim sapien, maximus vel mi congue, eleifend malesuada mi. Maecenas rhoncus convallis urna. Curabitur a mauris pretium, volutpat purus et, mattis risus. Integer vel enim sit amet orci convallis scelerisque. Sed scelerisque elit eget ligula maximus lacinia.<br><br></div><div>Vivamus purus ante, molestie non lobortis consequat, efficitur eu tellus. Sed ac lacinia magna. Duis et volutpat massa. Sed nisi enim, accumsan quis blandit sed, bibendum et enim. Vivamus iaculis vulputate elit ac bibendum. Nulla mattis justo at elit molestie accumsan. Donec laoreet nisi nec condimentum congue. Morbi hendrerit orci velit. Vestibulum sed consequat elit. Mauris id magna a dolor hendrerit convallis ut non lectus. Sed porta urna non neque condimentum, eu dictum neque pharetra. Sed mauris orci, dignissim ut dolor ut, accumsan fermentum urna. Fusce rutrum nulla quam, vitae bibendum neque bibendum quis. Sed nisi ligula, efficitur sed aliquet eget, ultrices sed libero. Etiam tempor nisi et arcu posuere, eget accumsan risus varius.<br><br></div><div>Nam et ante euismod nibh eleifend sodales eget vitae diam. Donec vel sem vulputate, malesuada odio sit amet, feugiat dolor. Morbi eget nulla non massa imperdiet bibendum et ut mauris. Etiam dui massa, interdum ac elementum id, mollis in velit. Etiam iaculis quis lectus et laoreet. Suspendisse vel velit a arcu imperdiet lobortis in vitae est. Proin facilisis rutrum gravida. Sed vulputate, ligula quis luctus tincidunt, lacus leo consectetur purus, sit amet vehicula erat sem eget lectus. Mauris faucibus nunc ante, ut varius dolor semper id. Etiam eu tellus erat. Proin eu tincidunt sem, eu pharetra sapien. Maecenas ut massa tellus. Nam sed auctor orci, ut commodo purus.<br><br></div><div>Suspendisse a faucibus turpis. Nam interdum, ante et tristique varius, eros ligula venenatis ipsum, vitae faucibus sapien justo a urna. Praesent vel neque ac mauris gravida gravida. Nullam nunc leo, semper vel nulla ut, condimentum sagittis elit. Phasellus scelerisque luctus varius. Mauris vitae metus vel quam posuere convallis. Duis ullamcorper metus ut eros vulputate, sed condimentum mi elementum. Nulla consequat, massa vel dapibus consectetur, est elit imperdiet lectus, eget dignissim lectus neque et nunc. Ut eu placerat diam. Nam velit ex, dignissim vel dolor id, facilisis euismod odio. Maecenas sagittis commodo nulla ut ultricies. Maecenas at leo non mi finibus dignissim ac a ante. Praesent sed felis enim. Donec vel eros eget leo facilisis pellentesque vel sed lorem.<br><br></div><div>Phasellus consectetur quam at purus lobortis, eu porta erat cursus. Proin suscipit lacinia mattis. Nulla facilisi. Mauris elementum enim nec ipsum interdum iaculis. Sed gravida elit id diam porttitor, vitae tempor nisi tristique. Fusce dignissim neque a augue sagittis, sed tincidunt ante rutrum. Suspendisse arcu urna, porttitor interdum lacinia a, tincidunt id nunc. Nullam interdum risus sit amet lorem bibendum, quis ultrices sapien iaculis. In nunc enim, vulputate et eros id, pharetra eleifend enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec sit amet nisl diam. Nam facilisis augue eget dolor blandit commodo. Mauris consequat convallis dolor, id pretium metus pulvinar ut. Maecenas et ex ultrices, porttitor lorem quis, elementum massa. Ut non gravida ligula, sed dapibus quam.<br><br></div><div>Nullam nec velit nec sem elementum consectetur sit amet ut mi. Sed egestas ullamcorper mollis. Suspendisse potenti. Curabitur at massa dictum, aliquet risus quis, rutrum nunc. Vestibulum tempus sapien nunc, et efficitur turpis scelerisque vitae. Fusce gravida, nunc non viverra scelerisque, nisl nisi faucibus lorem, eu varius diam odio et nisi. Proin ac ullamcorper est. Phasellus ut auctor arcu. Sed imperdiet neque non elit hendrerit pharetra a sit amet purus. Nam vitae mollis ante. Ut nec fermentum felis. Curabitur sapien sem, elementum et ligula at, varius luctus erat. Curabitur tincidunt lorem ac dolor blandit, eget rhoncus magna interdum. Ut condimentum massa quis erat viverra ultricies eget vel tortor.<br><br></div><div>Vestibulum quis purus sit amet arcu mollis blandit. Proin libero elit, feugiat ac metus in, convallis tincidunt orci. Aliquam erat volutpat. Praesent elit lorem, maximus ut ligula quis, molestie efficitur diam. Praesent cursus dolor sem, molestie tempor ex venenatis vel. Quisque tempor pretium laoreet. Curabitur porttitor elementum pretium.<br><br></div><div>Sed efficitur lorem eget elit convallis, ut ornare lorem euismod. Cras tempus tellus libero, in rhoncus sapien auctor nec. Nulla lectus tellus, imperdiet a porttitor ultricies, molestie id metus. Praesent et semper risus. Etiam vel laoreet nunc. Phasellus sed ante a risus laoreet viverra. Vivamus condimentum id urna a egestas. Pellentesque in purus nec justo ullamcorper ultrices. Mauris vehicula neque sit amet lectus sodales, eget commodo tortor pharetra.<br><br></div><div>Suspendisse vehicula, magna ac auctor interdum, metus sem venenatis velit, quis pulvinar ante erat at lectus. Sed quis ornare augue. Sed eu libero tincidunt, ultrices ex non, congue sapien. Mauris lectus quam, pretium vitae rhoncus ut, maximus ut ante. Donec vel massa quis ex ornare ornare ac vitae justo. Fusce hendrerit scelerisque dui ut hendrerit. Sed luctus nisi vitae lorem pharetra rhoncus. Nunc non ante id tortor pellentesque volutpat. Maecenas velit magna, sollicitudin nec leo non, facilisis sagittis metus. Integer convallis tellus ut diam vulputate porttitor. Vestibulum mollis porttitor elementum.<br><br></div>',
            'urlSource' => 'https://www.cnnindonesia.com/gaya-hidup/20221114150521-255-873528/benarkah-sering-makan-ceker-ayam-bisa-bikin-tulang-kian-kuat',
            'urlToImage' => '',
            'file_path' => 'news-image/pCCLoiFb2uXohHArNZaeR5yCJpHqKs3of0AYVbfj.jpg'
        ]);

        News::create([
            'admin_id' => 1,
            'category_news_id' => 1,
            'author' => 'CNN',
            'title' => '9 Makanan Pemicu Asam Lambung Naik, Enak Tapi Bikin Sesak',
            'content' => '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at augue vehicula metus fermentum tempor. Etiam tincidunt magna nisl, nec fermentum nibh condimentum sed. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam quam orci, cursus vitae mauris ut, ultricies scelerisque diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed et nisi iaculis, convallis orci consectetur, ornare quam. Nulla tincidunt commodo dolor, sit amet volutpat mauris lacinia luctus. Sed at lorem in leo consequat bibendum. Sed pretium lobortis maximus. Phasellus sollicitudin nunc sapien, at laoreet ex sollicitudin sed. Donec vel mi at orci convallis vulputate.<br><br></div><div>Sed lacinia facilisis velit, nec auctor dui ultricies eu. Fusce dapibus, urna quis porta scelerisque, dolor libero aliquet orci, ut viverra risus magna vel mauris. Morbi ante purus, congue sit amet vestibulum in, laoreet quis augue. Aliquam mi magna, volutpat et vestibulum eget, lacinia sed lacus. Nulla id nunc elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce sodales risus nisi, nec lacinia lacus malesuada tempus. In hac habitasse platea dictumst. Maecenas a vehicula justo. In enim sapien, maximus vel mi congue, eleifend malesuada mi. Maecenas rhoncus convallis urna. Curabitur a mauris pretium, volutpat purus et, mattis risus. Integer vel enim sit amet orci convallis scelerisque. Sed scelerisque elit eget ligula maximus lacinia.<br><br></div><div>Vivamus purus ante, molestie non lobortis consequat, efficitur eu tellus. Sed ac lacinia magna. Duis et volutpat massa. Sed nisi enim, accumsan quis blandit sed, bibendum et enim. Vivamus iaculis vulputate elit ac bibendum. Nulla mattis justo at elit molestie accumsan. Donec laoreet nisi nec condimentum congue. Morbi hendrerit orci velit. Vestibulum sed consequat elit. Mauris id magna a dolor hendrerit convallis ut non lectus. Sed porta urna non neque condimentum, eu dictum neque pharetra. Sed mauris orci, dignissim ut dolor ut, accumsan fermentum urna. Fusce rutrum nulla quam, vitae bibendum neque bibendum quis. Sed nisi ligula, efficitur sed aliquet eget, ultrices sed libero. Etiam tempor nisi et arcu posuere, eget accumsan risus varius.<br><br></div><div>Nam et ante euismod nibh eleifend sodales eget vitae diam. Donec vel sem vulputate, malesuada odio sit amet, feugiat dolor. Morbi eget nulla non massa imperdiet bibendum et ut mauris. Etiam dui massa, interdum ac elementum id, mollis in velit. Etiam iaculis quis lectus et laoreet. Suspendisse vel velit a arcu imperdiet lobortis in vitae est. Proin facilisis rutrum gravida. Sed vulputate, ligula quis luctus tincidunt, lacus leo consectetur purus, sit amet vehicula erat sem eget lectus. Mauris faucibus nunc ante, ut varius dolor semper id. Etiam eu tellus erat. Proin eu tincidunt sem, eu pharetra sapien. Maecenas ut massa tellus. Nam sed auctor orci, ut commodo purus.<br><br></div><div>Suspendisse a faucibus turpis. Nam interdum, ante et tristique varius, eros ligula venenatis ipsum, vitae faucibus sapien justo a urna. Praesent vel neque ac mauris gravida gravida. Nullam nunc leo, semper vel nulla ut, condimentum sagittis elit. Phasellus scelerisque luctus varius. Mauris vitae metus vel quam posuere convallis. Duis ullamcorper metus ut eros vulputate, sed condimentum mi elementum. Nulla consequat, massa vel dapibus consectetur, est elit imperdiet lectus, eget dignissim lectus neque et nunc. Ut eu placerat diam. Nam velit ex, dignissim vel dolor id, facilisis euismod odio. Maecenas sagittis commodo nulla ut ultricies. Maecenas at leo non mi finibus dignissim ac a ante. Praesent sed felis enim. Donec vel eros eget leo facilisis pellentesque vel sed lorem.<br><br></div><div>Phasellus consectetur quam at purus lobortis, eu porta erat cursus. Proin suscipit lacinia mattis. Nulla facilisi. Mauris elementum enim nec ipsum interdum iaculis. Sed gravida elit id diam porttitor, vitae tempor nisi tristique. Fusce dignissim neque a augue sagittis, sed tincidunt ante rutrum. Suspendisse arcu urna, porttitor interdum lacinia a, tincidunt id nunc. Nullam interdum risus sit amet lorem bibendum, quis ultrices sapien iaculis. In nunc enim, vulputate et eros id, pharetra eleifend enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec sit amet nisl diam. Nam facilisis augue eget dolor blandit commodo. Mauris consequat convallis dolor, id pretium metus pulvinar ut. Maecenas et ex ultrices, porttitor lorem quis, elementum massa. Ut non gravida ligula, sed dapibus quam.<br><br></div><div>Nullam nec velit nec sem elementum consectetur sit amet ut mi. Sed egestas ullamcorper mollis. Suspendisse potenti. Curabitur at massa dictum, aliquet risus quis, rutrum nunc. Vestibulum tempus sapien nunc, et efficitur turpis scelerisque vitae. Fusce gravida, nunc non viverra scelerisque, nisl nisi faucibus lorem, eu varius diam odio et nisi. Proin ac ullamcorper est. Phasellus ut auctor arcu. Sed imperdiet neque non elit hendrerit pharetra a sit amet purus. Nam vitae mollis ante. Ut nec fermentum felis. Curabitur sapien sem, elementum et ligula at, varius luctus erat. Curabitur tincidunt lorem ac dolor blandit, eget rhoncus magna interdum. Ut condimentum massa quis erat viverra ultricies eget vel tortor.<br><br></div><div>Vestibulum quis purus sit amet arcu mollis blandit. Proin libero elit, feugiat ac metus in, convallis tincidunt orci. Aliquam erat volutpat. Praesent elit lorem, maximus ut ligula quis, molestie efficitur diam. Praesent cursus dolor sem, molestie tempor ex venenatis vel. Quisque tempor pretium laoreet. Curabitur porttitor elementum pretium.<br><br></div><div>Sed efficitur lorem eget elit convallis, ut ornare lorem euismod. Cras tempus tellus libero, in rhoncus sapien auctor nec. Nulla lectus tellus, imperdiet a porttitor ultricies, molestie id metus. Praesent et semper risus. Etiam vel laoreet nunc. Phasellus sed ante a risus laoreet viverra. Vivamus condimentum id urna a egestas. Pellentesque in purus nec justo ullamcorper ultrices. Mauris vehicula neque sit amet lectus sodales, eget commodo tortor pharetra.<br><br></div><div>Suspendisse vehicula, magna ac auctor interdum, metus sem venenatis velit, quis pulvinar ante erat at lectus. Sed quis ornare augue. Sed eu libero tincidunt, ultrices ex non, congue sapien. Mauris lectus quam, pretium vitae rhoncus ut, maximus ut ante. Donec vel massa quis ex ornare ornare ac vitae justo. Fusce hendrerit scelerisque dui ut hendrerit. Sed luctus nisi vitae lorem pharetra rhoncus. Nunc non ante id tortor pellentesque volutpat. Maecenas velit magna, sollicitudin nec leo non, facilisis sagittis metus. Integer convallis tellus ut diam vulputate porttitor. Vestibulum mollis porttitor elementum.<br><br></div>',
            'urlSource' => 'https://www.cnnindonesia.com/gaya-hidup/20221208070620-262-884410/9-makanan-pemicu-asam-lambung-naik-enak-tapi-bikin-sesak',
            'urlToImage' => 'https://akcdn.detik.net.id/visual/2022/08/12/ilustrasi-sakit-perut_169.jpeg?w=650',
            'file_path' => 'news-image/7V8LrPUHUNmtIRdKg99sv8CisWYYBsPWlILkQVZp.webp'
        ]);
        News::create([
            'admin_id' => 1,
            'category_news_id' => 1,
            'author' => 'CNN',
            'title' => '7 Kebiasaan Penyebab Asam Urat: Minum Soda',
            'content' => '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at augue vehicula metus fermentum tempor. Etiam tincidunt magna nisl, nec fermentum nibh condimentum sed. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam quam orci, cursus vitae mauris ut, ultricies scelerisque diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed et nisi iaculis, convallis orci consectetur, ornare quam. Nulla tincidunt commodo dolor, sit amet volutpat mauris lacinia luctus. Sed at lorem in leo consequat bibendum. Sed pretium lobortis maximus. Phasellus sollicitudin nunc sapien, at laoreet ex sollicitudin sed. Donec vel mi at orci convallis vulputate.<br><br></div><div>Sed lacinia facilisis velit, nec auctor dui ultricies eu. Fusce dapibus, urna quis porta scelerisque, dolor libero aliquet orci, ut viverra risus magna vel mauris. Morbi ante purus, congue sit amet vestibulum in, laoreet quis augue. Aliquam mi magna, volutpat et vestibulum eget, lacinia sed lacus. Nulla id nunc elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce sodales risus nisi, nec lacinia lacus malesuada tempus. In hac habitasse platea dictumst. Maecenas a vehicula justo. In enim sapien, maximus vel mi congue, eleifend malesuada mi. Maecenas rhoncus convallis urna. Curabitur a mauris pretium, volutpat purus et, mattis risus. Integer vel enim sit amet orci convallis scelerisque. Sed scelerisque elit eget ligula maximus lacinia.<br><br></div><div>Vivamus purus ante, molestie non lobortis consequat, efficitur eu tellus. Sed ac lacinia magna. Duis et volutpat massa. Sed nisi enim, accumsan quis blandit sed, bibendum et enim. Vivamus iaculis vulputate elit ac bibendum. Nulla mattis justo at elit molestie accumsan. Donec laoreet nisi nec condimentum congue. Morbi hendrerit orci velit. Vestibulum sed consequat elit. Mauris id magna a dolor hendrerit convallis ut non lectus. Sed porta urna non neque condimentum, eu dictum neque pharetra. Sed mauris orci, dignissim ut dolor ut, accumsan fermentum urna. Fusce rutrum nulla quam, vitae bibendum neque bibendum quis. Sed nisi ligula, efficitur sed aliquet eget, ultrices sed libero. Etiam tempor nisi et arcu posuere, eget accumsan risus varius.<br><br></div><div>Nam et ante euismod nibh eleifend sodales eget vitae diam. Donec vel sem vulputate, malesuada odio sit amet, feugiat dolor. Morbi eget nulla non massa imperdiet bibendum et ut mauris. Etiam dui massa, interdum ac elementum id, mollis in velit. Etiam iaculis quis lectus et laoreet. Suspendisse vel velit a arcu imperdiet lobortis in vitae est. Proin facilisis rutrum gravida. Sed vulputate, ligula quis luctus tincidunt, lacus leo consectetur purus, sit amet vehicula erat sem eget lectus. Mauris faucibus nunc ante, ut varius dolor semper id. Etiam eu tellus erat. Proin eu tincidunt sem, eu pharetra sapien. Maecenas ut massa tellus. Nam sed auctor orci, ut commodo purus.<br><br></div><div>Suspendisse a faucibus turpis. Nam interdum, ante et tristique varius, eros ligula venenatis ipsum, vitae faucibus sapien justo a urna. Praesent vel neque ac mauris gravida gravida. Nullam nunc leo, semper vel nulla ut, condimentum sagittis elit. Phasellus scelerisque luctus varius. Mauris vitae metus vel quam posuere convallis. Duis ullamcorper metus ut eros vulputate, sed condimentum mi elementum. Nulla consequat, massa vel dapibus consectetur, est elit imperdiet lectus, eget dignissim lectus neque et nunc. Ut eu placerat diam. Nam velit ex, dignissim vel dolor id, facilisis euismod odio. Maecenas sagittis commodo nulla ut ultricies. Maecenas at leo non mi finibus dignissim ac a ante. Praesent sed felis enim. Donec vel eros eget leo facilisis pellentesque vel sed lorem.<br><br></div><div>Phasellus consectetur quam at purus lobortis, eu porta erat cursus. Proin suscipit lacinia mattis. Nulla facilisi. Mauris elementum enim nec ipsum interdum iaculis. Sed gravida elit id diam porttitor, vitae tempor nisi tristique. Fusce dignissim neque a augue sagittis, sed tincidunt ante rutrum. Suspendisse arcu urna, porttitor interdum lacinia a, tincidunt id nunc. Nullam interdum risus sit amet lorem bibendum, quis ultrices sapien iaculis. In nunc enim, vulputate et eros id, pharetra eleifend enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec sit amet nisl diam. Nam facilisis augue eget dolor blandit commodo. Mauris consequat convallis dolor, id pretium metus pulvinar ut. Maecenas et ex ultrices, porttitor lorem quis, elementum massa. Ut non gravida ligula, sed dapibus quam.<br><br></div><div>Nullam nec velit nec sem elementum consectetur sit amet ut mi. Sed egestas ullamcorper mollis. Suspendisse potenti. Curabitur at massa dictum, aliquet risus quis, rutrum nunc. Vestibulum tempus sapien nunc, et efficitur turpis scelerisque vitae. Fusce gravida, nunc non viverra scelerisque, nisl nisi faucibus lorem, eu varius diam odio et nisi. Proin ac ullamcorper est. Phasellus ut auctor arcu. Sed imperdiet neque non elit hendrerit pharetra a sit amet purus. Nam vitae mollis ante. Ut nec fermentum felis. Curabitur sapien sem, elementum et ligula at, varius luctus erat. Curabitur tincidunt lorem ac dolor blandit, eget rhoncus magna interdum. Ut condimentum massa quis erat viverra ultricies eget vel tortor.<br><br></div><div>Vestibulum quis purus sit amet arcu mollis blandit. Proin libero elit, feugiat ac metus in, convallis tincidunt orci. Aliquam erat volutpat. Praesent elit lorem, maximus ut ligula quis, molestie efficitur diam. Praesent cursus dolor sem, molestie tempor ex venenatis vel. Quisque tempor pretium laoreet. Curabitur porttitor elementum pretium.<br><br></div><div>Sed efficitur lorem eget elit convallis, ut ornare lorem euismod. Cras tempus tellus libero, in rhoncus sapien auctor nec. Nulla lectus tellus, imperdiet a porttitor ultricies, molestie id metus. Praesent et semper risus. Etiam vel laoreet nunc. Phasellus sed ante a risus laoreet viverra. Vivamus condimentum id urna a egestas. Pellentesque in purus nec justo ullamcorper ultrices. Mauris vehicula neque sit amet lectus sodales, eget commodo tortor pharetra.<br><br></div><div>Suspendisse vehicula, magna ac auctor interdum, metus sem venenatis velit, quis pulvinar ante erat at lectus. Sed quis ornare augue. Sed eu libero tincidunt, ultrices ex non, congue sapien. Mauris lectus quam, pretium vitae rhoncus ut, maximus ut ante. Donec vel massa quis ex ornare ornare ac vitae justo. Fusce hendrerit scelerisque dui ut hendrerit. Sed luctus nisi vitae lorem pharetra rhoncus. Nunc non ante id tortor pellentesque volutpat. Maecenas velit magna, sollicitudin nec leo non, facilisis sagittis metus. Integer convallis tellus ut diam vulputate porttitor. Vestibulum mollis porttitor elementum.<br><br></div>',
            'urlSource' => 'https://www.cnnindonesia.com/gaya-hidup/20221207151832-255-884147/7-kebiasaan-penyebab-asam-urat-minum-soda',
            'urlToImage' => 'https://akcdn.detik.net.id/visual/2019/09/25/893f2e53-c772-4329-81ea-6fec60ac1058_169.jpeg?w=650',
            'file_path' => 'news-image/GZsg7Xe18UUbDjUVARq7E2IbIBvjRn5j6U1PkzzB.png'
        ]);

        News::create([
            'admin_id' => 1,
            'category_news_id' => 1,
            'author' => 'CNN',
            'title' => 'Gejala Covid-19 yang Sering Dikeluhkan Pasien yang Sudah Booster',
            'content' => '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at augue vehicula metus fermentum tempor. Etiam tincidunt magna nisl, nec fermentum nibh condimentum sed. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam quam orci, cursus vitae mauris ut, ultricies scelerisque diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed et nisi iaculis, convallis orci consectetur, ornare quam. Nulla tincidunt commodo dolor, sit amet volutpat mauris lacinia luctus. Sed at lorem in leo consequat bibendum. Sed pretium lobortis maximus. Phasellus sollicitudin nunc sapien, at laoreet ex sollicitudin sed. Donec vel mi at orci convallis vulputate.<br><br></div><div>Sed lacinia facilisis velit, nec auctor dui ultricies eu. Fusce dapibus, urna quis porta scelerisque, dolor libero aliquet orci, ut viverra risus magna vel mauris. Morbi ante purus, congue sit amet vestibulum in, laoreet quis augue. Aliquam mi magna, volutpat et vestibulum eget, lacinia sed lacus. Nulla id nunc elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce sodales risus nisi, nec lacinia lacus malesuada tempus. In hac habitasse platea dictumst. Maecenas a vehicula justo. In enim sapien, maximus vel mi congue, eleifend malesuada mi. Maecenas rhoncus convallis urna. Curabitur a mauris pretium, volutpat purus et, mattis risus. Integer vel enim sit amet orci convallis scelerisque. Sed scelerisque elit eget ligula maximus lacinia.<br><br></div><div>Vivamus purus ante, molestie non lobortis consequat, efficitur eu tellus. Sed ac lacinia magna. Duis et volutpat massa. Sed nisi enim, accumsan quis blandit sed, bibendum et enim. Vivamus iaculis vulputate elit ac bibendum. Nulla mattis justo at elit molestie accumsan. Donec laoreet nisi nec condimentum congue. Morbi hendrerit orci velit. Vestibulum sed consequat elit. Mauris id magna a dolor hendrerit convallis ut non lectus. Sed porta urna non neque condimentum, eu dictum neque pharetra. Sed mauris orci, dignissim ut dolor ut, accumsan fermentum urna. Fusce rutrum nulla quam, vitae bibendum neque bibendum quis. Sed nisi ligula, efficitur sed aliquet eget, ultrices sed libero. Etiam tempor nisi et arcu posuere, eget accumsan risus varius.<br><br></div><div>Nam et ante euismod nibh eleifend sodales eget vitae diam. Donec vel sem vulputate, malesuada odio sit amet, feugiat dolor. Morbi eget nulla non massa imperdiet bibendum et ut mauris. Etiam dui massa, interdum ac elementum id, mollis in velit. Etiam iaculis quis lectus et laoreet. Suspendisse vel velit a arcu imperdiet lobortis in vitae est. Proin facilisis rutrum gravida. Sed vulputate, ligula quis luctus tincidunt, lacus leo consectetur purus, sit amet vehicula erat sem eget lectus. Mauris faucibus nunc ante, ut varius dolor semper id. Etiam eu tellus erat. Proin eu tincidunt sem, eu pharetra sapien. Maecenas ut massa tellus. Nam sed auctor orci, ut commodo purus.<br><br></div><div>Suspendisse a faucibus turpis. Nam interdum, ante et tristique varius, eros ligula venenatis ipsum, vitae faucibus sapien justo a urna. Praesent vel neque ac mauris gravida gravida. Nullam nunc leo, semper vel nulla ut, condimentum sagittis elit. Phasellus scelerisque luctus varius. Mauris vitae metus vel quam posuere convallis. Duis ullamcorper metus ut eros vulputate, sed condimentum mi elementum. Nulla consequat, massa vel dapibus consectetur, est elit imperdiet lectus, eget dignissim lectus neque et nunc. Ut eu placerat diam. Nam velit ex, dignissim vel dolor id, facilisis euismod odio. Maecenas sagittis commodo nulla ut ultricies. Maecenas at leo non mi finibus dignissim ac a ante. Praesent sed felis enim. Donec vel eros eget leo facilisis pellentesque vel sed lorem.<br><br></div><div>Phasellus consectetur quam at purus lobortis, eu porta erat cursus. Proin suscipit lacinia mattis. Nulla facilisi. Mauris elementum enim nec ipsum interdum iaculis. Sed gravida elit id diam porttitor, vitae tempor nisi tristique. Fusce dignissim neque a augue sagittis, sed tincidunt ante rutrum. Suspendisse arcu urna, porttitor interdum lacinia a, tincidunt id nunc. Nullam interdum risus sit amet lorem bibendum, quis ultrices sapien iaculis. In nunc enim, vulputate et eros id, pharetra eleifend enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec sit amet nisl diam. Nam facilisis augue eget dolor blandit commodo. Mauris consequat convallis dolor, id pretium metus pulvinar ut. Maecenas et ex ultrices, porttitor lorem quis, elementum massa. Ut non gravida ligula, sed dapibus quam.<br><br></div><div>Nullam nec velit nec sem elementum consectetur sit amet ut mi. Sed egestas ullamcorper mollis. Suspendisse potenti. Curabitur at massa dictum, aliquet risus quis, rutrum nunc. Vestibulum tempus sapien nunc, et efficitur turpis scelerisque vitae. Fusce gravida, nunc non viverra scelerisque, nisl nisi faucibus lorem, eu varius diam odio et nisi. Proin ac ullamcorper est. Phasellus ut auctor arcu. Sed imperdiet neque non elit hendrerit pharetra a sit amet purus. Nam vitae mollis ante. Ut nec fermentum felis. Curabitur sapien sem, elementum et ligula at, varius luctus erat. Curabitur tincidunt lorem ac dolor blandit, eget rhoncus magna interdum. Ut condimentum massa quis erat viverra ultricies eget vel tortor.<br><br></div><div>Vestibulum quis purus sit amet arcu mollis blandit. Proin libero elit, feugiat ac metus in, convallis tincidunt orci. Aliquam erat volutpat. Praesent elit lorem, maximus ut ligula quis, molestie efficitur diam. Praesent cursus dolor sem, molestie tempor ex venenatis vel. Quisque tempor pretium laoreet. Curabitur porttitor elementum pretium.<br><br></div><div>Sed efficitur lorem eget elit convallis, ut ornare lorem euismod. Cras tempus tellus libero, in rhoncus sapien auctor nec. Nulla lectus tellus, imperdiet a porttitor ultricies, molestie id metus. Praesent et semper risus. Etiam vel laoreet nunc. Phasellus sed ante a risus laoreet viverra. Vivamus condimentum id urna a egestas. Pellentesque in purus nec justo ullamcorper ultrices. Mauris vehicula neque sit amet lectus sodales, eget commodo tortor pharetra.<br><br></div><div>Suspendisse vehicula, magna ac auctor interdum, metus sem venenatis velit, quis pulvinar ante erat at lectus. Sed quis ornare augue. Sed eu libero tincidunt, ultrices ex non, congue sapien. Mauris lectus quam, pretium vitae rhoncus ut, maximus ut ante. Donec vel massa quis ex ornare ornare ac vitae justo. Fusce hendrerit scelerisque dui ut hendrerit. Sed luctus nisi vitae lorem pharetra rhoncus. Nunc non ante id tortor pellentesque volutpat. Maecenas velit magna, sollicitudin nec leo non, facilisis sagittis metus. Integer convallis tellus ut diam vulputate porttitor. Vestibulum mollis porttitor elementum.<br><br></div>',
            'urlSource' => 'https://www.cnnindonesia.com/gaya-hidup/20221207122406-255-883999/gejala-covid-19-yang-sering-dikeluhkan-pasien-yang-sudah-booster',
            'urlToImage' => 'https://akcdn.detik.net.id/visual/2022/02/17/ilustrasi-sakit-tenggorokan_169.jpeg?w=650',
            'file_path' => 'news-image/PHF2ofikbSC2uMDEFlaQ4tRjb3FHGPHfNFl2gH4A.jpg'
        ]);

        News::create([
            'admin_id' => 1,
            'category_news_id' => 1,
            'author' => 'CNN',
            'title' => 'Jangan Sepelekan Menopause Dini pada Pria',
            'content' => '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at augue vehicula metus fermentum tempor. Etiam tincidunt magna nisl, nec fermentum nibh condimentum sed. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam quam orci, cursus vitae mauris ut, ultricies scelerisque diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed et nisi iaculis, convallis orci consectetur, ornare quam. Nulla tincidunt commodo dolor, sit amet volutpat mauris lacinia luctus. Sed at lorem in leo consequat bibendum. Sed pretium lobortis maximus. Phasellus sollicitudin nunc sapien, at laoreet ex sollicitudin sed. Donec vel mi at orci convallis vulputate.<br><br></div><div>Sed lacinia facilisis velit, nec auctor dui ultricies eu. Fusce dapibus, urna quis porta scelerisque, dolor libero aliquet orci, ut viverra risus magna vel mauris. Morbi ante purus, congue sit amet vestibulum in, laoreet quis augue. Aliquam mi magna, volutpat et vestibulum eget, lacinia sed lacus. Nulla id nunc elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce sodales risus nisi, nec lacinia lacus malesuada tempus. In hac habitasse platea dictumst. Maecenas a vehicula justo. In enim sapien, maximus vel mi congue, eleifend malesuada mi. Maecenas rhoncus convallis urna. Curabitur a mauris pretium, volutpat purus et, mattis risus. Integer vel enim sit amet orci convallis scelerisque. Sed scelerisque elit eget ligula maximus lacinia.<br><br></div><div>Vivamus purus ante, molestie non lobortis consequat, efficitur eu tellus. Sed ac lacinia magna. Duis et volutpat massa. Sed nisi enim, accumsan quis blandit sed, bibendum et enim. Vivamus iaculis vulputate elit ac bibendum. Nulla mattis justo at elit molestie accumsan. Donec laoreet nisi nec condimentum congue. Morbi hendrerit orci velit. Vestibulum sed consequat elit. Mauris id magna a dolor hendrerit convallis ut non lectus. Sed porta urna non neque condimentum, eu dictum neque pharetra. Sed mauris orci, dignissim ut dolor ut, accumsan fermentum urna. Fusce rutrum nulla quam, vitae bibendum neque bibendum quis. Sed nisi ligula, efficitur sed aliquet eget, ultrices sed libero. Etiam tempor nisi et arcu posuere, eget accumsan risus varius.<br><br></div><div>Nam et ante euismod nibh eleifend sodales eget vitae diam. Donec vel sem vulputate, malesuada odio sit amet, feugiat dolor. Morbi eget nulla non massa imperdiet bibendum et ut mauris. Etiam dui massa, interdum ac elementum id, mollis in velit. Etiam iaculis quis lectus et laoreet. Suspendisse vel velit a arcu imperdiet lobortis in vitae est. Proin facilisis rutrum gravida. Sed vulputate, ligula quis luctus tincidunt, lacus leo consectetur purus, sit amet vehicula erat sem eget lectus. Mauris faucibus nunc ante, ut varius dolor semper id. Etiam eu tellus erat. Proin eu tincidunt sem, eu pharetra sapien. Maecenas ut massa tellus. Nam sed auctor orci, ut commodo purus.<br><br></div><div>Suspendisse a faucibus turpis. Nam interdum, ante et tristique varius, eros ligula venenatis ipsum, vitae faucibus sapien justo a urna. Praesent vel neque ac mauris gravida gravida. Nullam nunc leo, semper vel nulla ut, condimentum sagittis elit. Phasellus scelerisque luctus varius. Mauris vitae metus vel quam posuere convallis. Duis ullamcorper metus ut eros vulputate, sed condimentum mi elementum. Nulla consequat, massa vel dapibus consectetur, est elit imperdiet lectus, eget dignissim lectus neque et nunc. Ut eu placerat diam. Nam velit ex, dignissim vel dolor id, facilisis euismod odio. Maecenas sagittis commodo nulla ut ultricies. Maecenas at leo non mi finibus dignissim ac a ante. Praesent sed felis enim. Donec vel eros eget leo facilisis pellentesque vel sed lorem.<br><br></div><div>Phasellus consectetur quam at purus lobortis, eu porta erat cursus. Proin suscipit lacinia mattis. Nulla facilisi. Mauris elementum enim nec ipsum interdum iaculis. Sed gravida elit id diam porttitor, vitae tempor nisi tristique. Fusce dignissim neque a augue sagittis, sed tincidunt ante rutrum. Suspendisse arcu urna, porttitor interdum lacinia a, tincidunt id nunc. Nullam interdum risus sit amet lorem bibendum, quis ultrices sapien iaculis. In nunc enim, vulputate et eros id, pharetra eleifend enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec sit amet nisl diam. Nam facilisis augue eget dolor blandit commodo. Mauris consequat convallis dolor, id pretium metus pulvinar ut. Maecenas et ex ultrices, porttitor lorem quis, elementum massa. Ut non gravida ligula, sed dapibus quam.<br><br></div><div>Nullam nec velit nec sem elementum consectetur sit amet ut mi. Sed egestas ullamcorper mollis. Suspendisse potenti. Curabitur at massa dictum, aliquet risus quis, rutrum nunc. Vestibulum tempus sapien nunc, et efficitur turpis scelerisque vitae. Fusce gravida, nunc non viverra scelerisque, nisl nisi faucibus lorem, eu varius diam odio et nisi. Proin ac ullamcorper est. Phasellus ut auctor arcu. Sed imperdiet neque non elit hendrerit pharetra a sit amet purus. Nam vitae mollis ante. Ut nec fermentum felis. Curabitur sapien sem, elementum et ligula at, varius luctus erat. Curabitur tincidunt lorem ac dolor blandit, eget rhoncus magna interdum. Ut condimentum massa quis erat viverra ultricies eget vel tortor.<br><br></div><div>Vestibulum quis purus sit amet arcu mollis blandit. Proin libero elit, feugiat ac metus in, convallis tincidunt orci. Aliquam erat volutpat. Praesent elit lorem, maximus ut ligula quis, molestie efficitur diam. Praesent cursus dolor sem, molestie tempor ex venenatis vel. Quisque tempor pretium laoreet. Curabitur porttitor elementum pretium.<br><br></div><div>Sed efficitur lorem eget elit convallis, ut ornare lorem euismod. Cras tempus tellus libero, in rhoncus sapien auctor nec. Nulla lectus tellus, imperdiet a porttitor ultricies, molestie id metus. Praesent et semper risus. Etiam vel laoreet nunc. Phasellus sed ante a risus laoreet viverra. Vivamus condimentum id urna a egestas. Pellentesque in purus nec justo ullamcorper ultrices. Mauris vehicula neque sit amet lectus sodales, eget commodo tortor pharetra.<br><br></div><div>Suspendisse vehicula, magna ac auctor interdum, metus sem venenatis velit, quis pulvinar ante erat at lectus. Sed quis ornare augue. Sed eu libero tincidunt, ultrices ex non, congue sapien. Mauris lectus quam, pretium vitae rhoncus ut, maximus ut ante. Donec vel massa quis ex ornare ornare ac vitae justo. Fusce hendrerit scelerisque dui ut hendrerit. Sed luctus nisi vitae lorem pharetra rhoncus. Nunc non ante id tortor pellentesque volutpat. Maecenas velit magna, sollicitudin nec leo non, facilisis sagittis metus. Integer convallis tellus ut diam vulputate porttitor. Vestibulum mollis porttitor elementum.<br><br></div>',
            'urlSource' => 'https://www.cnnindonesia.com/gaya-hidup/20221104133128-255-869530/jangan-sepelekan-menopause-dini-pada-pria',
            'urlToImage' => 'https://akcdn.detik.net.id/visual/2021/10/16/ilustrasi-pria-hidup-sendiri-1_169.jpeg?w=650',
            'file_path' => 'news-image/iyGKsYB7wuPjpSc16F53e3xWpRuxqgEPG1yNvLvN.jpg'
        ]);

        Disease::create([
            'category_disease_id' => 1,
            'disease' => 'Asma',
            'doctor' => 'dr. Koko Harnoko',
            'symptom1' => 'batuk kering',
            'symptom2' => 'pilek',
            'symptom3' => 'sesak napas',
            'symptom4' => 'sesak dada',
            'symptom5' => 'mengi',
            'definition' => 'Asma adalah suatu kelainan berupa peradangan kronik saluran napas yang menyebabkan penyempitan saluran napas (hiperaktifitas bronkus) sehingga menyebabkan gejala episodik berulang berupa mengi, sesak napas, dada terasa berat, dan batuk terutama pada malam atau dini hari',
            'treatment' => 'asma dapat disembuhkan dengan cara bantuan minum obat Di samping melakukan pengobatan, pengidap asma juga harus menghindari dari hal-hal yang dapat menjadi pemicu asma kambuh. Biasanya, dokter akan merekomendasikan inhaler sabagai pengobatan saat gejala asma muncul.',
            'prevention' => 'pencegahan asma: Mengenali & menghindari pemicu asma, Mengikuti anjuran rencana penanganan asma dari dokter, Melakukan langkah pengobatan yang tepat dengan mengenali penyebab serangan asma, Menggunakan obat-obatan asma yang telah dianjurkan oleh dokter secara teratur, Memonitor kondisi saluran napas.'
        ]);

        Disease::create([
            'category_disease_id' => 1,
            'disease' => 'Herpes',
            'doctor' => 'Dr. Lo Kang Shang Chit',
            'symptom1' => 'nyeri',
            'symptom2' => 'gatal',
            'symptom3' => 'rasa terbakar',
            'symptom4' => 'luka lepuh',
            'symptom5' => 'lenting-lenting kecil',
            'definition' => 'Herpes adalah kelompok virus yang dapat menyebabkan infeksi. Infeksi virus herpes umumnya ditandai dengan kulit kering, luka lepuh, atau luka terbuka yang berair. Herpes simplex virus (HSV) dan varicella-zoster virus (VZ) adalah jenis virus herpes yang umum menyerang manusia.',
            'treatment' => 'Mengonsumsi paracetamol atau ibuprofen untuk meredakan nyeri, Mengompres ruam kulit dengan air hangat atau atau air dingin, Menggunakan air suam kuku untuk mandi, Menggunakan pakaian longgar, Menggunakan pakaian dalam berbahan katun, Menjaga area luka tetap kering dan bersih',
            'prevention' => 'Hindari kontak fisik dengan orang lain terutama bagi yang memiliki luka terbuka, Cuci tangan dengan air mengalir dan sabun secara rutin, Oleskan obat pada ruam dengan menggunakan kapas agar tangan tidak menyentuh daerah yang terinfeksi virus herpes, Jangan berbagi pakai barang-barang yang dapat menyebarkan virus (seperti gelas, cangkir, handuk, pakaian, dan peralatan makeup'
        ]);

        Disease::create([
            'category_disease_id' => 1,
            'disease' => 'Liver',
            'doctor' => 'dr. R. Eddy Setiyoso, SpPD-KGEH',
            'symptom1' => 'sakit perut',
            'symptom2' => 'mudah memar',
            'symptom3' => 'perubahan warna urin atau feses',
            'symptom4' => 'mual',
            'symptom5' => 'edema',
            'definition' => 'Penyakit liver adalah penyakit yang mengganggu fungsi liver. Liver atau hati merupakan organ penting yang ada di bawah tulang rusuk di sisi kanan perut. Organ ini berperan untuk mencerna makanan dan membersihkan tubuh dari racun.',
            'treatment' => 'obat untuk infeksi virus seperti hepatitis atau kondisi bawaan, seperti penyakit Wilson. Pola makan juga bisa membantu mengelola beberapa jenis penyakit liver. Contohnya, bila kamu mengidap penyakit hati berlemak, maka menghindari alkohol, membatasi asupan lemak dan kalori, serta meningkatkan asupan serat bisa membantu memperbaiki kondisi. Ketika penyakit hati sudah berkembang menjadi gagal hati, transplantasi mungkin merupakan pengobatan yang terbaik.',
            'prevention' => 'Tidak berbagi jarum suntik dan melakukan hubungan seksual yang aman, Mencegah terjadinya hepatitis dengan cara mengikuti program vaksinasi virus hepatitis, Menjaga berat badan normal sesuai dengan indeks massa tubuh, Tidak mengonsumsi minuman beralkohol, Konsultasikan dengan dokter sebelum mengonsumsi obat medis maupun obat herbal.'
        ]);

        Disease::create([
            'category_disease_id' => 1,
            'disease' => 'Maag',
            'doctor' => 'dr. Cindy, M. Biomed, SpPD',
            'symptom1' => 'nyeri perut',
            'symptom2' => 'perut kembung',
            'symptom3' => 'perut mudah terasa penuh',
            'symptom4' => 'sering bersendawa dan kentut',
            'symptom5' => '',
            'definition' => 'Sakit maag atau dispepsia adalah rasa tidak nyaman di perut, seperti perut terasa penuh, rasa panas pada perut bagian atas, serta kembung. Gejala ini paling sering terjadi selama atau beberapa saat setelah makan',
            'treatment' => 'Sakit maag umumnya bersifat ringan dan membaik dengan mengubah pola hidup. Namun, jika sakit maag berlangsung secara terus-menerus atau memburuk, segera ke dokter agar mendapatkan penanganan lebih lanjut.',
            'prevention' => 'Sakit maag dapat dicegah dengan membatasi konsumsi makanan yang pedas atau berlemak, mengurangi konsumsi minuman beralkohol, mengelola stres dengan baik, dan tidak merokok.'
        ]);

        Disease::create([
            'category_disease_id' => 1,
            'disease' => 'Demam Berdarah',
            'doctor' => 'dr. Laras Budiyani, SpPD',
            'symptom1' => 'sakit kepala',
            'symptom2' => 'nyeri otot, tulang atau sendi',
            'symptom3' => 'mual',
            'symptom4' => 'sakit di belakang mata',
            'symptom5' => 'ruam',
            'definition' => 'Demam Berdarah Dengue adalah penyakit yang ditularkan oleh nyamuk yang terjadi di daerah tropis dan subtropis di dunia. Untuk demam berdarah ringan, maka ia akan menyebabkan demam tinggi dan gejala seperti flu. Sementara untuk demam berdarah yang parah, ia bisa menyebabkan pendarahan serius, penurunan tekanan darah secara tiba-tiba (syok) dan bahkan kematian.',
            'treatment' => 'Jika kamu mengalami demam berdarah yang parah, kamu memerlukan: Perawatan suportif di rumah sakit, Penggantian cairan dan elektrolit intravena (IV), Pemantauan tekanan darah, Transfusi darah untuk menggantikan kehilangan darah.',
            'prevention' => 'Gunakan AC atau kelambu yang dipasang diventilasi dan tempat tidur, Kenakan pakaian pelindung saat kamu pergi ke daerah yang dipenuhi nyamuk, Gunakan obat nyamuk seperti permetrin karena mereka dapat diaplikasikan pada pakaian, Mengurangi habitat nyamuk dengan menutup genangan air.'
        ]);

        Disease::create([
            'category_disease_id' => 1,
            'disease' => 'Diabetes',
            'doctor' => 'DR. Dr. Indra Wijaya, Sp.PD - KEMD, M.Kes, FINASIM',
            'symptom1' => 'mulut kering',
            'symptom2' => 'kulit gatal-gatal',
            'symptom3' => 'disfungsi ereksi',
            'symptom4' => 'penurunan massa otot',
            'symptom5' => 'rasa terbakar, kaku, dan nyeri pada kaki',
            'definition' => 'Diabetes adalah penyakit kronis yang ditandai dengan tingginya kadar gula darah. Glukosa merupakan sumber energi utama bagi sel tubuh manusia. Akan tetapi, pada penderita diabetes, glukosa tersebut tidak dapat digunakan oleh tubuh.',
            'treatment' => 'membutuhkan terapi insulin untuk mengatur gula darah sehari-hari, mengatur pola makan dengan memperbanyak konsumsi: buah, sayur, protein dari biji-bijian, serta makanan rendah kalori dan lemak. Pilihan makanan untuk penderita diabetes juga sebaiknya benar-benar diperhatikan, Tes gula darah mandiri dilakukan sebanyak minimal 4 kali dalam sehari, yaitu pada setiap sebelum makan dan sebelum tidur, terutama bagi yang menjalani terapi insulin. Frekuensi tes yang dilakukan tergantung pada anjuran dari',
            'prevention' => 'Beberapa upaya yang bisa dilakukan untuk mencegah diabetes di antaranya:Mengatur frekuensi dan menu makanan menjadi lebih sehat, Rutin berolahraga dan melakukan aktivitas fisik, Menjaga berat badan ideal, Beristirahat dan tidur yang cukup, Berhenti merokok, Menghindari konsumsi minuman beralkohol, Mengelola stres dengan baik, Rutin menjalani pengecekan gula darah, setidaknya sekali dalam 1 tahun.'
        ]);

        Disease::create([
            'category_disease_id' => 1,
            'disease' => 'Tifus',
            'doctor' => 'dr. Fauzar, Sp.PD-KP-FINASIM',
            'symptom1' => 'demam',
            'symptom2' => 'sakit kepala',
            'symptom3' => 'nyeri otot',
            'symptom4' => 'ruam',
            'symptom5' => '',
            'definition' => 'Tifus atau typhus adalah istilah untuk penyakit yang disebabkan oleh bakteri Rickettsia dan Orientia. Penyakit ini dapat menular melalui gigitan kutu atau tungau yang terinfeksi. Tifus dapat menyebabkan demam, sakit kepala, hingga muncul ruam merah di kulit.',
            'treatment' => 'Pengobatan tifus adalah dengan pemberian obat-obatan. Agar hasilnya maksimal, obat-obatan tersebut perlu diminum segera setelah gejala tifus muncul. Oleh karena itu, segera periksakan diri ke dokter bila mengalami gejala tifus untuk mendapatkan penanganan yang cepat dan tepat.',
            'prevention' => 'Untuk mencegah serangan bakteri penyebab tifus. Caranya antara lain dengan menjaga kebersihan diri dan tempat tinggal, serta menghindari kontak dengan hewan yang membawa infeksi tifus, seperti tikus.'
        ]);

        Disease::create([
            'category_disease_id' => 1,
            'disease' => 'Diare',
            'doctor' => 'dr. Winny Melinarisa Putri',
            'symptom1' => 'perut mulas',
            'symptom2' => 'buang air besar cair',
            'symptom3' => 'sering buang air besar',
            'symptom4' => 'lemas',
            'symptom5' => 'kulit kering',
            'definition' => 'Diare adalah penyakit yang membuat penderitanya menjadi sering buang air besar dengan kondisi tinja yang encer atau berair. Diare umumnya terjadi akibat mengonsumsi makanan dan minuman yang terkontaminasi virus, bakteri, atau parasit.',
            'treatment' => 'Pengobatan utama diare adalah untuk mencegah dehidrasi. Penderita dapat meminum cairan elektrolit, untuk mengganti cairan tubuh yang hilang akibat diare. Selain itu, konsumsi makanan lunak, suplemen probiotik, dan obat antidiare yang bisa didapatkan di apotek.',
            'prevention' => 'Dianjurkan untuk selalu menjaga kebersihan diri dan makanan, misalnya dengan mencuci buah dan sayur, tidak mengonsumsi makanan atau minum air yang belum dimasak sampai matang, dan rajin mencuci tangan.'
        ]);

        Disease::create([
            'category_disease_id' => 1,
            'disease' => 'Tuberkulosis',
            'doctor' => 'dr. Yudyarini Pramita Handayani, AAAIJ, FLMI, ACII',
            'symptom1' => 'batuk',
            'symptom2' => 'batuk darah',
            'symptom3' => 'demam',
            'symptom4' => 'berkeringat di malam hari',
            'symptom5' => 'mudah letih',
            'definition' => 'Tuberkulosis (TBC)  atau TB adalah penyakit menular akibat infeksi bakteri. TBC umumnya menyerang paru-paru, tetapi juga dapat menyerang organ tubuh lain, seperti ginjal, tulang belakang, dan otak.',
            'treatment' => 'Pengobatan TBC adalah dengan mengonsumsi obat sesuai dosis dan anjuran dari  dokter. Jenis obat yang diresepkan untuk mengatasi TBC antara lain rifampicin dan ethambutol',
            'prevention' => 'TBC dapat dicegah dengan vaksin BCG. Pemberian vaksin ini disarankan sebelum bayi berusia 2 bulan. Pencegahan juga dapat dilakukan dengan menghindari kontak dengan orang yang sedang sakit dan memakai masker saat berada di tempat ramai.'
        ]);

        Disease::create([
            'category_disease_id' => 1,
            'disease' => 'Difteri',
            'doctor' => 'dr. Ade Febrina Lestari, M.Sc., Sp.A',
            'symptom1' => 'demam',
            'symptom2' => 'batuk darah',
            'symptom3' => 'sakit tenggorokan',
            'symptom4' => 'sulit bernapas',
            'symptom5' => 'suara serak',
            'definition' => 'Muncul benjolan di leher akibat pembengkakan kelenjar getah bening',
            'treatment' => 'Difteri adalah penyakit menular yang dapat disebarkan melalui batuk, bersin, atau luka terbuka. Gejalanya termasuk sakit tenggorokan dan masalah pernapasan. Penyebab utama difteri adalah infeksi bakteri Corynebacterium diphteriae, yang menyerang selaput lendir pada hidung dan tenggorokan, serta dapat memengaruhi kulit.',
            'prevention' => 'Beberapa jenis pengobatan yang dilakukan untuk menangani difteri adalah:Suntik antiracun, Antibiotik, Satu-satunya pencegahan difteri yang paling efektif adalah mendapatkan vaksinasi difteri.'
        ]);

        Disease::create([
            'category_disease_id' => 1,
            'disease' => 'Covid-19',
            'doctor' => 'dr. Oktaviani Dewi Ratih',
            'symptom1' => 'demam',
            'symptom2' => 'batuk kering',
            'symptom3' => 'sesak napas',
            'symptom4' => 'indra perasa hilang',
            'symptom5' => 'indra penciuman hilang',
            'definition' => 'Virus Corona atau severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2) adalah virus yang menyerang sistem pernapasan. Penyakit akibat infeksi virus ini disebut COVID-19. Virus Corona bisa menyebabkan gangguan ringan pada sistem pernapasan, infeksi paru-paru yang berat, hingga kematian.',
            'treatment' => 'Minum obat yang dijual bebas untuk mengurangi rasa sakit, demam, dan batuk. Namun, jangan berikan aspirin pada anak-anak. Selain itu, jangan berikan obat batuk pada anak di bawah empat tahun, Gunakan pelembap ruangan atau mandi air panas untuk membantu meredakan sakit tenggorokan dan batuk, Perbanyak istirahat, Perbanyak asupan cairan tubuh.',
            'prevention' => 'Sering-seringlah mencuci tangan dengan sabun dan air selama 20 detik hingga bersih, Hindari menyentuh wajah, hidung, atau mulut saat tangan dalam keadaan kotor atau belum dicuci, Hindari kontak langsung atau berdekatan dengan orang yang sakit, Hindari menyentuh hewan atau unggas liar,\r\nMembersihkan dan mensterilkan permukaan benda yang sering digunakan, Tutup hidung dan mulut ketika bersin atau batuk dengan tisu. Kemudian, buanglah tisu dan cuci tangan hingga bersih, Jangan keluar rumah dalam keadaan sakit, Kenakan masker dan segera berobat ke fasilitas kesehatan ketika mengalami gejala penyakit saluran napas, Konsumsi vitamin untuk meningkatkan daya tahan tubuh.',
        ]);

        Disease::create([
            'category_disease_id' => 1,
            'disease' => 'Malaria',
            'doctor' => 'dr. Mulyadi, Sp.PD',
            'symptom1' => 'demam',
            'symptom2' => 'menggigil',
            'symptom3' => 'sakit kepala',
            'symptom4' => 'pegal linu',
            'symptom5' => 'mual',
            'definition' => 'Malaria merupakan penyakit yang disebabkan oleh parasit Plasomodium. Penyakit ini ditularkan melalui gigitan nyamuk Anopheles betina yang terinfeksi parasit tersebut. Gigitan nyamuk membuat parasit masuk, mengendap di organ hati, dan menginfeksi sel drah merah.',
            'treatment' => 'Untuk pengobatan jenis malaria yang disebabkan oleh Plasmodium vivax yang tergolong ringan, penderita akan diberikan obat rawat jalan berupa ACT atau obat chloroquine.',
            'prevention' => 'mencegah penyebaran penyakit malaria: Gunakan kelambu ketika tidur, Memakai pakaian serba panjang seperti celana dan lengan panjang selama beraktivitas, Hindari meletakkan pakaian basah di dalam rumah karena dapat menjadi tempat persembunyian nyamuk, Lakukan langkah 3M (Menguras penampungan air, Mengubur barang bekas, dan Mendaur ulang barang bekas), Gunakan lotion anti nyamuk yang mengandung DEET (diethyltoluamide)',
        ]);

        Disease::create([
            'category_disease_id' => 1,
            'disease' => 'Cacingan',
            'doctor' => 'dr. Frieda Handayani Kawanto, Sp.A',
            'symptom1' => 'sakit perut',
            'symptom2' => 'lemas',
            'symptom3' => 'perut kembung',
            'symptom4' => '',
            'symptom5' => '',
            'definition' => 'Cacing adalah salah satu parasit yang bisa masuk ke dalam tubuh sehingga menyebabkan gejala penyakit. Kondisi ini disebut cacingan. Cacingan sendiri secara umum merujuk pada infeksi cacing dalam tubuh manusia.',
            'treatment' => 'Pengobatan yang dilakukan pada penderita cacingan umumnya dilakukan dengan mengonsumsi obat cacing yang diminum selama 1-3 hari.',
            'prevention' => 'Untuk mencegah cacingan, perlu Menjaga kebersihan serta membiasakan diri untuk mencuci tangan, utamanya setelah memakai kamar kecil, dan sebelum makan, atau mempersiapkan makanan. Bawalah cairan desinfektan untuk digunakan sewaktu-waktu, Cuci buah dan sayur hingga bersih sebelum dimasak, Masak makanan hingga matang. Perhatikan bahwa berbagai sumber protein perlu suhu tertentu untuk mencapai kematangan masing-masing, Konsumsi air putih dalam kemasan atau air putih yang matang.',
        ]);

        Disease::create([
            'category_disease_id' => 1,
            'disease' => 'Cacar Air',
            'doctor' => 'dr.Triasari Oktavriana, SpKK.',
            'symptom1' => 'sakit kepala',
            'symptom2' => 'demam',
            'symptom3' => 'nyeri otot',
            'symptom4' => 'mual',
            'symptom5' => 'hilangnya nafsu makan',
            'definition' => 'Varicella atau cacar air adalah jenis penyakit kulit yang terjadi karena adanya infeksi virus pada tubuh seseorang. Infeksi virus tersebut akan membuat tubuh penderitanya timbul lenting atau lepuhan berisi air di sekujur tubuh.',
            'treatment' => 'Pengobatan cacar air bertujuan untuk mengurangi keparahan gejala, dengan atau tanpa bantuan obat. Ada beberapa upaya yang bisa dilakukan untuk meringankan gejala, yaitu mengenakan pakaian yang longgar dan berbahan lembut, serta tidak menggaruk ruam atau luka cacar air.',
            'prevention' => 'Pencegahan cacar air adalah dengan mendapatkan vaksinasi cacar air atau vaksin varicella. Di Indonesia sendiri, vaksin cacar air tidak termasuk dalam daftar imunisasi rutin lengkap, tetapi tetap dianjurkan untuk diberikan.',
        ]);

        Disease::create([
            'category_disease_id' => 1,
            'disease' => 'Cacar Monyet',
            'doctor' => 'dr.Triasari Oktavriana, SpKK.',
            'symptom1' => 'demam',
            'symptom2' => 'menggigil',
            'symptom3' => 'sakit kepala',
            'symptom4' => 'nyeri otot',
            'symptom5' => '',
            'definition' => 'Cacar monyet adalah infeksi virus yang ditandai dengan bintil bernanah di kulit. Cacar monyet atau monkeypox pertama kali muncul di negara Republik Demokratik Kongo pada tahun 1970.',
            'treatment' => 'Hingga saat ini, belum ada pengobatan untuk cacar monyet. Penyakit ini umumnya hanya menimbulkan gejala ringan dan dapat sembuh dengan sendirinya dalam 2-4 minggu. Sedangkan penyebaran cacar monyet dapat dicegah dengan vaksin cacar (smallpox).',
            'prevention' => 'Rajin mencuci tangan dengan air dan sabun atau hand sanitizer, terutama sebelum memasak atau mengolah makanan, sebelum makan, sebelum menyentuh hidung atau mata, dan sebelum membersihkan luka, Menghindari berbagi penggunaan alat makan dengan orang lain, juga tidak menggunakan barang yang sama dengan orang yang terinfeksi cacar monyet, Menghindari kontak dengan hewan liar atau mengonsumsi dagingnya, Memasak bahan makanan, terutama daging, hingga matang.',
        ]);

        Disease::create([
            'category_disease_id' => 1,
            'disease' => 'Infeksi Saluran Pernapasan Akut (ISPA)',
            'doctor' => 'dr. Steven Jonathan, SpP, FAPSR',
            'symptom1' => 'batuk',
            'symptom2' => 'demam',
            'symptom3' => 'nyeri menelan',
            'symptom4' => 'mengi',
            'symptom5' => '',
            'definition' => 'Infeksi saluran pernapasan akut atau ISPA adalah infeksi yang terjadi di saluran pernapasan, baik saluran pernapasan atas maupun bawah. Infeksi ini dapat menimbulkan gejala batuk, pilek, dan demam. ISPA sangat mudah menular dan dapat dialami oleh siapa saja, terutama anak-anak dan lansia.',
            'treatment' => 'Memperbanyak istirahat dan konsumsi air putih untuk mengencerkan dahak agar lebih mudah untuk dikeluarkan, Mengonsumsi minuman lemon hangat atau madu, untuk meredakan batuk, Berkumur dengan air hangat yang diberi garam jika mengalami sakit tenggorokan, Menghirup uap dari semangkuk air panas yang telah dicampur dengan minyak kayu putih atau mentol, untuk meredakan hidung tersumbat, Memosisikan kepala lebih tinggi ketika tidur dengan menggunakan bantal, untuk melancarkan pernapasan.',
            'prevention' => 'Cuci tangan secara teratur, terutama setelah beraktivitas di tempat umum, Hindari menyentuh wajah, terutama bagian mulut, hidung, dan mata, Gunakan sapu tangan atau tisu untuk menutup mulut ketika bersin atau batuk, agar penyakit tidak menyebar ke orang lain, Perbanyak konsumsi makanan kaya vitamin, terutama vitamin C, untuk meningkatkan daya tahan tubuh, Bersihkan rumah dan lingkungan sekitar secara rutin, Dapatkan vaksinasi, baik vaksin MMR, influenza, maupun pneumonia, dan diskusikan dengan dokter mengenai keperluan, manfaat, dan risiko dari vaksinasi ini.',
        ]);

        Disease::create([
            'category_disease_id' => 1,
            'disease' => 'Flu Burung',
            'doctor' => 'dr. Moch. Mundir Arif, Sp. THT-KL',
            'symptom1' => 'demam',
            'symptom2' => 'batuk',
            'symptom3' => 'muntah',
            'symptom4' => 'diare',
            'symptom5' => 'mimisan',
            'definition' => 'Flu burung adalah penyakit yang disebabkan oleh infeksi virus influenza tipe A yang ditularkan oleh unggas ke manusia. Ada banyak jenis virus flu burung, tetapi hanya beberapa yang dapat menyebabkan infeksi pada manusia.',
            'treatment' => 'Beberapa obat antivirus yang biasanya diberikan adalah: Oseltamivir, Peramivir, Zanamivir, Amantadine, Rimantadine.',
            'prevention' => 'Beberapa hal yang dapat dilakukan adalah: Menghindari kontak langsung dengan unggas, Menghindari kontak langsung dengan orang sakit, Menjaga kebersihan dan mencuci tangan secara rutin, Tidak menyentuh mata, hidung, dan mulut, sebelum cuci tangan, Mengonsumsi daging atau telur unggas yang telah dimasak hingga matang,',
        ]);

        Disease::create([
            'category_disease_id' => 1,
            'disease' => 'Influenza',
            'doctor' => 'dr. Shindy Putri',
            'symptom1' => 'demam',
            'symptom2' => 'pilek',
            'symptom3' => 'batuk',
            'symptom4' => 'kepala pusing',
            'symptom5' => '',
            'definition' => 'Flu atau influenza adalah infeksi virus yang menyerang hidung, tenggorokan, dan paru-paru. Penderita flu dapat mengalami demam, sakit kepala, pilek, hidung tersumbat, serta batuk.',
            'treatment' => 'Flu ringan bisa diatasi dengan banyak beristirahat, mengonsumsi makanan sehat yang mengandung vitamin C, dan banyak minum. Namun, bila gejalanya berat, segera lakukan pemeriksaan ke dokter agar diberikan obat untuk mempercepat kesembuhan dan mencegah komplikasi.',
            'prevention' => 'Cara mencegah flu yang paling efektif adalah dengan menjalani vaksinasi influenza. Selain itu, Anda juga diajurkan untuk rajin cuci tangan dan tidak berdekatan dengan penderita flu.',
        ]);

        Disease::create([
            'category_disease_id' => 1,
            'disease' => 'Katarak',
            'doctor' => 'dr. Vinca Desyandri, Sp.M',
            'symptom1' => 'pandangan kabur',
            'symptom2' => 'pandangan ganda',
            'symptom3' => 'rasa silau',
            'symptom4' => 'kepala pusing',
            'symptom5' => '',
            'definition' => 'Katarak adalah suatu penyakit ketika lensa mata menjadi keruh dan berawan. Pada umumnya, katarak berkembang perlahan dan awalnya tidak terasa mengganggu. Namun, lama-kelamaan, katarak akan mengganggu penglihatan dan membuat pengidap merasa seperti melihat jendela berkabut, sulit menyetir, membaca, serta melakukan aktivitas sehari-hari. Penyakit mata ini merupakan penyebab kebutaan utama di dunia yang dapat diobati.',
            'treatment' => 'Jika katarak tidak terlalu mengganggu, kamu mungkin hanya perlu mengenakan kacamata baru untuk membantu kamu melihat lebih baik, Jika katarak menyebabkan penglihatan semakin memburuk dan sulit menjalani aktivitas sehari-hari, prosedur operasi merupakan pengobatan yang bisa dilakukan untuk mengatasi masalah mata tersebut.',
            'prevention' => 'Memeriksakan mata secara teratur pada dokter spesialis mata, Melindungi mata dari benturan dan cahaya matahari yang terlalu lama, dengan menggunakan kacamata yang melindungi dari sinar ultraviolet baik UVA dan UVB, Kelola masalah kesehatan lain, seperti diabetes yang bisa meningkatkan risiko katarak, Memperbaiki pencahayaan di rumah, Menggunakan kaca pembesar saat membaca.',
        ]);

    }
}
