<script>
export default {
    methods: {
        $showToast(data, type) {
            toastr.options = {
                closeButton: false,
                debug: false,
                newestOnTop: false,
                progressBar: false,
                positionClass: "toast-top-right",
                preventDuplicates: false,
                onclick: null,
                showDuration: "300",
                hideDuration: "5000",
                timeOut: "3000",
                extendedTimeOut: "1000",
                showEasing: "swing",
                hideEasing: "linear",
                showMethod: "fadeIn",
                hideMethod: "fadeOut"
            };

            type == "error"
                ? toastr.error(data)
                : type == "info"
                ? toastr.info(data)
                : toastr.success(data);
        },
        $timeEng(nTime) {
            let time = nTime
                .toString()
                .match(/^([01]\d|2[0-3])(:)([0-5]\d)(:[0-5]\d)?$/) || [time];

            if (time.length > 1) {
                time = time.slice(1);
                time[3] = +time[0] < 12 ? " AM" : " PM";
                time[0] = +time[0] % 12 || 12;
            }
            return time.join("");
        },
        $dateEng(nDate) {
            let date = new Date(nDate);
            let options = { year: "numeric", month: "long", day: "numeric" };
            return date.toLocaleDateString("en-US", options);
        },
        $dateEng2(nDate) {
            let date = new Date(nDate);
            let options = { month: "short", day: "numeric" };
            return date.toLocaleDateString("en-US", options);
        },
        $dateNum(nDate) {
            let date = new Date(nDate);
            let options = { month: "numeric", day: "numeric" };
            return date.toLocaleDateString("en-US", options);
        },
        $dateTimeEng(nDateTime) {
            let date = new Date(nDateTime);
            let options = {
                year: "numeric",
                month: "long",
                day: "numeric",
                hour: "numeric",
                minute: "numeric"
            };
            return date.toLocaleDateString("en-US", options);
        },
        $toParseNum(num) {
            let number = parseFloat(num);
            return number.toLocaleString(undefined, {
                minimumFractionDigits: 2
            });
        },
        $chkStatus(stats) {
            let label;
            if (stats == "Pending") {
                label =
                    '<span class="label label-inline label-light-warning">Pending</span>';
            } else if (stats == "Approved") {
                label =
                    '<span class="label label-inline label-light-primary">Approved</span>';
            } else if (stats == "Completed") {
                label =
                    '<span class="label label-inline label-light-success">Completed</span>';
            }
            return label;
        },
        $chkStatus2(stats) {
            let label;
            if (stats == "active") {
                label =
                    '<span class="label label-inline label-light-primary">Active</span>';
            } else if (stats == "inactive") {
                label =
                    '<span class="label label-inline label-light-warning">Inactive</span>';
            }
            return label;
        },
        $chkAssigned(mot, id = null) {
            let label;
            $(`#checkable_${id}`).prop("disabled", false);
            $(`#checkable_${id}`)
                .closest("tr")
                .removeClass("bg-disabled");
            if (mot) {
                if (mot == 1) {
                    label =
                        '<span class="label label-inline label-light-danger">Unassigned</span>';
                } else if (mot == 2 || mot == 3 || mot == 4) {
                    label =
                        '<span class="label label-inline label-light-primary">Assigned</span>';
                }

                $(() => {
                    if (id) {
                        $(`#checkable_${id}`).prop("disabled", true);
                        $(`#checkable_${id}`)
                            .closest("tr")
                            .addClass("bg-disabled");
                    }
                });
            } else {
                label =
                    '<span class="label label-inline label-light-warning">Pending</span>';
            }
            return label;
        },
        $parseURLParams(url) {
            var queryStart = url.indexOf("?") + 1,
                queryEnd = url.indexOf("#") + 1 || url.length + 1,
                query = url.slice(queryStart, queryEnd - 1),
                pairs = query.replace(/\+/g, " ").split("&"),
                parms = {},
                i,
                n,
                v,
                nv;

            if (query === url || query === "") return;

            for (i = 0; i < pairs.length; i++) {
                nv = pairs[i].split("=", 2);
                n = decodeURIComponent(nv[0]);
                v = decodeURIComponent(nv[1]);

                if (!parms.hasOwnProperty(n)) parms[n] = [];
                parms[n].push(nv.length === 2 ? v : null);
            }
            return parms;
        },
        $searchInArray(searchString, arrayOfLists) {
            let matchingStrings = [];

            arrayOfLists.forEach(list => {
                if (
                    list
                        .toLocaleLowerCase()
                        .search(searchString.toLocaleLowerCase()) > -1
                ) {
                    matchingStrings.push(list);
                }
            });

            return matchingStrings;
        },
        $label(lbl) {
            return (
                '<span class="btn-details label label-lg font-weight-bold label-light-primary label-inline text-nowrap">' +
                lbl +
                "</span>"
            );
        },
        $titleCase(str) {
            return str.replace(/\w\S*/g, function(txt) {
                return (
                    txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase()
                );
            });
        },
        $getSpecificDate(arr, type) {
            let sDate =
                type == "max"
                    ? arr[arr.length - 1]
                    : type == "min"
                    ? arr[0]
                    : null;
            if (!sDate) return "Error Params";
            for (let i = 0; i < arr.length; i++) {
                if (type == "min") {
                    if (arr[i] < sDate) {
                        sDate = arr[i];
                    }
                } else if (type == "max") {
                    if (arr[i] > sDate) {
                        sDate = arr[i];
                    }
                }
            }
            return sDate;
        }
    }
};
</script>
