[view.php]
$calendar = calendar_information::create($time, $courseid, $categoryid);
$calendar->add_sidecalendar_blocks($renderer, true, $view);

[lib.php]
class calendar_information {
public static function create($time, int $courseid, int $categoryid = null) : calendar_information {
        ....
}
    public function add_sidecalendar_blocks(core_calendar_renderer $renderer, $showfilters=false, $view=null) {
        ....
}
}
