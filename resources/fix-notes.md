
to correct the OldXXX associations that arrise for old_xxx_id use in new tables

(Old([A-Za-z]*)', \[\n)('for)

$1'className' => 'Legacy$2',\n$3