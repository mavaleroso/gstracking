<template>
  <div
    class="request-travel card card-custom animate__animated animate__fadeIn"
    id="kt_page_sticky_card"
  >
    <div class="card-header">
      <div class="card-title">
        <h3 class="card-label">
          Motor Vehicle
          <i class="mr-2"></i>
          <small class="">Request Form</small>
        </h3>
      </div>
    </div>
    <div class="card-body">
      <form class="form" id="kt_form">
        <div class="row">
          <div class="col-xl-2"></div>
          <div class="col-xl-8">
            <div v-if="complete" class="jumbotron">
              <p class="lead">Your request has successfully completed!</p>
              <hr class="my-4" />
              <p>{{ createdAt }}</p>
              <p class="lead">
                <router-link
                  :to="{ name: 'listLocalRequests' }"
                  class="btn btn-success btn-sm"
                  href="#"
                  role="button"
                  >Update request</router-link
                >

                <a
                  class="btn btn-primary btn-sm"
                  href="#"
                  @click="newRequest"
                  role="button"
                  >New request</a
                >
              </p>
            </div>
            <div class="my-5">
              <input name="request_id" type="hidden" value="" />
              <h3 class="text-dark font-weight-bold mb-10">Requestor Info:</h3>
              <div class="form-group row">
                <label class="col-3 mt-3">Division</label>
                <div class="col-9">
                  <select
                    class="details-input form-control select2"
                    id="kt_select_division"
                    name="division"
                  >
                    <option label="Label"></option>
                    <option
                      v-for="division in divisions"
                      :key="division.id"
                      :value="division.id"
                    >
                      {{ division.division_name }}
                    </option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-3 mt-3">Section</label>
                <div class="col-9">
                  <select
                    class="details-input form-control select2"
                    id="kt_select_section"
                    name="section"
                  >
                    <option label="Label"></option>
                    <option
                      v-for="section in sections.filter(
                        (i) => i.division_id == activeDivision
                      )"
                      :key="section.id"
                      :value="section.id"
                    >
                      {{ section.section_name }}
                    </option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-3 mt-3">Purpose of travel</label>
                <div class="col-9">
                  <input
                    name="pur_travel"
                    id="pur_travel"
                    type="text"
                    class="details-input form-control"
                    placeholder="Enter purpose here"
                  />
                </div>
              </div>
              <div class="form-group row">
                <label class="col-3 mt-3">Destination</label>
                <div class="col-9">
                  <input
                    name="destination_place"
                    id="destination_place"
                    type="text"
                    class="details-input form-control"
                    placeholder="Enter place here"
                  />
                </div>
              </div>
              <div class="form-group row">
                <label class="col-3 mt-3">Date of Travel</label>
                <div class="col-9">
                  <input
                    id="date-travel"
                    name="date_travel"
                    class="details-input form-control"
                    :min="maxDate"
                    type="date"
                  />
                </div>
              </div>
              <div class="form-group row">
                <label class="col-3 mt-3">Date of Return</label>
                <div class="col-9">
                  <input
                    id="date-return"
                    name="date_return"
                    class="details-input form-control"
                    :min="maxDate"
                    type="date"
                  />
                </div>
              </div>
              <div class="form-group row">
                <label class="col-3 mt-3">Time of Departure</label>
                <div class="col-9">
                  <input
                    name="time_depart"
                    class="details-input form-control"
                    type="time"
                  />
                </div>
              </div>
            </div>
            <div class="separator separator-dashed my-10"></div>
            <div
              :class="
                loadingStats ? 'card-body overlay overlay-block' : 'card-body'
              "
            >
              <div v-if="loadingStats" class="overlay-layer bg-dark-o-10">
                <div class="spinner spinner-primary"></div>
              </div>
              <div class="my-5">
                <div class="d-flex">
                  <h3 class="text-dark font-weight-bold mb-10">
                    Passenger Details:
                  </h3>
                  <div v-if="complete == false" class="ml-auto">
                    <button
                      class="btn btn-sm btn-outline-primary"
                      @click="addRow"
                    >
                      <i class="fa fa-plus-square p-0"></i>
                    </button>
                    <button
                      class="btn btn-sm btn-outline-primary"
                      @click="removeRow"
                    >
                      <i class="fa fa-minus-square p-0"></i>
                    </button>
                  </div>
                </div>
                <input
                  type="hidden"
                  id="pax-total"
                  name="pax_total"
                  v-model="total"
                />

                <table id="passenger-tbl" class="table w-100">
                  <thead>
                    <tr>
                      <th scope="col" class="text-center">#</th>
                      <th scope="col" class="text-center">
                        Name of Passenger/s
                      </th>
                      <th scope="col" class="text-center">
                        Position/Designation
                      </th>
                      <th scope="col" class="text-center w-15">Gender</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="index in total" :key="index">
                      <td scope="row" class="text-center">
                        {{ index }}
                      </td>
                      <td>
                        <select
                          v-if="$store.getters['currentUser/loadingStats']"
                          class="details-input form-control select2"
                          :id="'passenger-select-' + index"
                          :name="'pax_name_' + index"
                          disabled
                        >
                          <option label="Label"></option>
                          <option
                            v-for="(result, index) in results"
                            :key="index"
                            :data-id="index"
                            :value="
                              result.first_name +
                              ' ' +
                              result.middle_name +
                              ' ' +
                              result.last_name
                            "
                          >
                            {{ result.first_name }}
                            {{ result.middle_name }}
                            {{ result.last_name }}
                          </option>
                        </select>
                        <select
                          v-else
                          class="details-input form-control select2"
                          :id="'passenger-select-' + index"
                          :name="'pax_name_' + index"
                        >
                          <option label="Label"></option>
                          <option
                            v-for="(result, index) in results"
                            :key="index"
                            :data-id="index"
                            :value="
                              result.first_name +
                              ' ' +
                              result.middle_name +
                              ' ' +
                              result.last_name
                            "
                          >
                            {{ result.first_name }}
                            {{ result.middle_name }}
                            {{ result.last_name }}
                          </option>
                        </select>
                      </td>
                      <td>
                        <input
                          :name="'pax_des_' + index"
                          :id="'pax_des_' + index"
                          class="details-input data-entry form-control"
                          type="text"
                          v-model="pax_des[index - 1]"
                          disabled
                        />
                      </td>
                      <td>
                        <input
                          :name="'pax_gen_' + index"
                          :id="'pax_gen_' + index"
                          class="details-input data-entry form-control"
                          type="text"
                          v-model="pax_gen[index - 1]"
                          disabled
                        />
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-xl-2"></div>
        </div>
      </form>
      <!--end::Form-->
    </div>
    <div class="card-footer">
      <div v-if="complete == false" class="save-form-btn">
        <button
          type="button"
          class="btn btn-primary font-weight-bolder"
          @click="saveForm"
        >
          <i class="ki ki-check icon-sm"></i>Save Form
        </button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      divisions: [],
      sections: [],
      activeSections: [],
      names: [
        "region",
        "province",
        "city",
        "brgy",
        "date_travel",
        "pax_des_1",
        "pax_name_1",
        "pax_gen_1",
        "division",
        "section",
        "pur_travel",
        "time_depart",
        "date_return",
        "destination_place",
      ],
      complete: false,
      createdAt: null,
      maxDate: null,
      travelDate: null,
      returnDate: null,
      activeDivision: null,
      results: [],
      total: 1,
      gender: "",
      designation: "",
      semi_total: 1,
      pax_des: [],
      pax_gen: [],
    };
  },
  created() {
    this.getDivision();
    this.getSection();
    this.EmployeeList();
  },
  computed: {
    loadingStats() {
      let res = this.$store.getters["currentUser/loadingStats"];
      if (!res) {
        this.results = JSON.parse(localStorage.getItem("ListEmployee"));
      }
      return res;
    },
  },
  mounted() {
    this.ini();
    this.dateConf();
  },
  methods: {
    ini() {
      let vm = this;
      $(() => {
        $("#kt_select_division").select2({
          placeholder: "Select a Division",
          allowClear: true,
        });
        $("#kt_select_section").select2({
          placeholder: "Select a Section",
          allowClear: true,
        });
        $("#passenger-select-1").select2({
          placeholder: "Select fullname",
          allowClear: true,
        });
        $(`#passenger-select-1`).on("select2:select", function (e) {
          let paxVal = $(this).find(":selected").data("id");
          vm.getData(paxVal, 1);
        });

        $(`#passenger-select-1`).on("select2:clear", function (e) {
          $("#pax_des_1").val(null);
          $("#pax_gen_1").val(null);
          vm.pax_gen[0] = "";
          vm.pax_des[0] = "";
        });

        $(".menu-item").removeClass("menu-item-active");
        $(".router-link-active").parent().addClass("menu-item-active");

        $("#kt_select_division").on("change", function () {
          vm.activeDivision = $(this).val();
        });

        $("#kt_select_section").on("change", () => {
          let id = $("#kt_select_section").val();
          this.section = id;
        });
      });
    },
    getData(id, index) {
      let vm = this;
      this.pax_des[index - 1] = vm.results[id].position;
      this.pax_gen[index - 1] = vm.results[id].gender;
      $(`[name="pax_gen_${index}"]`).val(vm.results[id].gender);
      $(`[name="pax_des_${index}"]`).val(vm.results[id].position);
    },
    clearData() {
      let vm = this;
      vm.total = 1;
      vm.pax_des.length = 0;
      vm.pax_gen.length = 0;
    },
    EmployeeList() {
      this.results = JSON.parse(localStorage.getItem("ListEmployee"));
    },
    convertToInt(data) {
      console.log("Called");
      console.log(data);
      return false;
    },
    addRow(event) {
      event.preventDefault();
      let count = (this.total += 1);
      this.semi_total += 1;
      let vm = this;

      setTimeout(() => {
        $(`#passenger-select-${count}`).select2({
          placeholder: "Select a fullname",
          allowClear: true,
        });
        $(`#passenger-select-${count}`).on("select2:select", function (e) {
          let paxVal = $(this).find(":selected").data("id");
          vm.getData(paxVal, count);
        });

        $(`#passenger-select-${count}`).on("select2:clear", function (e) {
          $("#pax_des_" + `${count}`).val(null);
          $("#pax_gen_" + `${count}`).val(null);
          vm.pax_gen[count - 1] = "";
          vm.pax_des[count - 1] = "";
        });
      }, 100);
    },
    removeRow(event) {
      event.preventDefault();
      if (this.total != 1) {
        let count = (this.total -= 1);
        let vm = this;
        var parsedobj_desc = JSON.parse(JSON.stringify(vm.pax_des));
        var parsedobj_gen = JSON.parse(JSON.stringify(vm.pax_gen));
        parsedobj_desc.splice(count, 1);
        parsedobj_gen.splice(count, 1);
        vm.pax_des = parsedobj_desc;
        vm.pax_gen = parsedobj_gen;
      }
      $("#pax-total").val(
        parseInt($("#passenger-tbl tbody tr:eq(-1) td:eq(0)").text())
      );
    },
    saveForm() {
      $(".data-entry").attr("disabled", false);
      let requestform = $("#kt_form").serialize();

      axios
        .post(BASE_URL + "/travel/request", requestform)
        .then((response) => {
          $(".invalid-feedback").remove();
          $(".is-invalid").removeClass("is-invalid");
          Swal.fire("Good job!", response.data.message, "success");
          this.$showToast(response.data.message, "success");
          $(".details-input").attr("disabled", true);
          this.complete = true;
          this.createdAt = this.$dateTimeEng(response.data.result.created_at);
        })
        .catch((error) => {
          $(".data-entry").attr("disabled", true);
          let data = error.response.data.errors;
          let keys = [];
          let values = [];
          for (const [key, value] of Object.entries(data)) {
            keys.push(`${key}`);
            values.push(`${value}`);
            if (
              `${key}` == "region" ||
              `${key}` == "province" ||
              `${key}` == "city" ||
              `${key}` == "division" ||
              `${key}` == "section"
            ) {
              if (
                $("#kt_select_" + `${key}`)
                  .next()
                  .next().length == 0 ||
                $("#kt_select_" + `${key}`)
                  .next()
                  .next()
                  .attr("class")
                  .search("invalid-feedback") == -1
              ) {
                $("#kt_select_" + `${key}`)
                  .next()
                  .after(
                    '<div class="invalid-feedback d-block">' +
                      `${value}` +
                      "</div>"
                  );
              }
            } else {
              if (
                $('[name="' + `${key}` + '"]').next().length == 0 ||
                $('[name="' + `${key}` + '"]')
                  .next()
                  .attr("class")
                  .search("invalid-feedback") == -1
              ) {
                $('[name="' + `${key}` + '"]').addClass("is-invalid");
                $('[name="' + `${key}` + '"]').after(
                  '<div class="invalid-feedback">' + `${value}` + "</div>"
                );
              }
            }
          }
          for (let i = 0; i < this.names.length; i++) {
            if (
              this.names[i] == "region" ||
              this.names[i] == "province" ||
              this.names[i] == "city" ||
              this.names[i] == "division" ||
              this.names[i] == "section"
            ) {
              if (keys.indexOf("" + this.names[i] + "") == -1) {
                if (
                  $("#kt_select_" + this.names[i])
                    .next()
                    .next().length != 0
                ) {
                  $("#kt_select_" + this.names[i])
                    .next()
                    .next(".invalid-feedback")
                    .remove();
                }
              }
            } else {
              if (keys.indexOf("" + this.names[i] + "") == -1) {
                $('[name="' + this.names[i] + '"]').removeClass("is-invalid");
                $('[name="' + this.names[i] + '"]')
                  .next(".invalid-feedback")
                  .remove();
              }
            }
          }
          this.$showToast(values.toString().replace(/,/g, "</br>"), "error");
        });
    },

    getDivision() {
      this.divisions = JSON.parse(localStorage.getItem("division"));
    },
    getSection() {
      this.sections = JSON.parse(localStorage.getItem("section"));
    },
    newRequest() {
      $(".details-input").val(null).trigger("change");
      setTimeout(() => {
        $(".data-entry").attr("disabled", true);
      }, 500);
      this.clearData();
      for (let i = 0; i < this.names.length; i++) {
        if (
          this.names[i] == "section" ||
          this.names[i] == "province" ||
          this.names[i] == "city" ||
          this.names[i] == "brgy"
        ) {
          $("#kt_select_" + this.names[i]).empty();
        } else if (this.names[i] == "division" || this.names[i] == "region") {
          $("#kt_select_region").val(null).trigger("change");
        } else {
          $('[name="' + this.names[i] + '"]').val(null);
        }
        $("#kt_select_division").val(null).trigger("change");
      }
      $(".details-input").attr("disabled", false);
      this.complete = false;
      this.createdAt = null;
    },
    dateConf() {
      var dtToday = new Date();
      var month = dtToday.getMonth() + 1;
      var day = dtToday.getDate();
      var year = dtToday.getFullYear();
      if (month < 10) month = "0" + month.toString();
      if (day < 10) day = "0" + day.toString();
      var maxDate = year + "-" + month + "-" + day;
      this.maxDate = maxDate;
    },
  },
};
</script>
