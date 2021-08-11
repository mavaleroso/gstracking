<template>
  <div id="vehicle-page">
    <div class="card card-custom gutter-b animate__animated animate__fadeIn">
      <div class="card-body">
        <table
          class="table table-separate table-head-custom table-checkable"
          id="logs-tbl"
        >
          <thead>
            <tr>
              <th>ID</th>
              <th>User</th>
              <th>Page</th>
              <th>Url</th>
              <th>Action</th>
              <th>Create_at</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      create: false,
    };
  },
  mounted() {
    this.ini();
  },
  methods: {
    ini() {
      $(() => {
        this.tdatatable().init();
      });
    },
    tdatatable() {
      var initTable = () => {
        var table = $("#logs-tbl");
        table.DataTable({
          scrollY: "50vh",
          scrollX: true,
          scrollCollapse: true,
          processing: true,
          serverSide: true,
          ajax: {
            url: BASE_URL + "/history/log",
            type: "GET",
          },
          columns: [
            { data: "id" },
            { data: "name" },
            { data: "page" },
            { data: "url" },
            { data: "action" },
            { data: "created_at" },
          ],
          columnDefs: [
            {
              targets: 5,
              render: (data) => {
                return this.$dateTimeEng(data);
              },
            },
          ],
        });
      };
      return {
        init: function () {
          initTable();
        },
      };
    },
  },
};
</script>