<?php 
session_start(); 
include "../conn.php";
include "session.php";
?>
<style>
    .tblview { 
        width: 100%; 
        border-collapse: collapse; 
    }
    .thView { 
        background: #333; 
        color: white; 
        font-weight: bold; 
    }
    .tblview, .theadView, .tbodyView, .thView, .tdView, .trView { 
		display: block; 
	}
    .theadView .trView { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
    .tdView { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}
    .tdView:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
	
		padding-right: 10px; 
		white-space: nowrap;
	}
    .modal-content {
        width: 600px;
    }
    .tdView:nth-of-type(1):before { content: "TUPV-ID"; }
	.tdView:nth-of-type(2):before { content: "Last Name"; }
	.tdView:nth-of-type(3):before { content: "First Name"; }
	.tdView:nth-of-type(4):before { content: "M.I."; }
	.tdView:nth-of-type(5):before { content: "Birthdate"; }
	.tdView:nth-of-type(6):before { content: "Civil-Status"; }
	.tdView:nth-of-type(7):before { content: "Sex"; }
	.tdView:nth-of-type(8):before { content: "Address"; }
	.tdView:nth-of-type(9):before { content: "Contact Number"; }
	.tdView:nth-of-type(10):before { content: "Email"; }
    .tdView:nth-of-type(11):before { content: "Year Graduated"; }
	.tdView:nth-of-type(12):before { content: "Program Graduated"; }
	.tdView:nth-of-type(13):before { content: "Current Profession"; }
	.tdView:nth-of-type(14):before { content: "Company Name"; }
	.tdView:nth-of-type(15):before { content: "Present Employment Status"; }

</style>
<div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="table alumni-tableV text-center rounded-3 tblview" style="font-size: 12px;">
            <thead class="theadView">
                <tr class="trView">
                    <th class="m-tbl-th fw-light low-col thView" scope="col">TUPV-ID</th>
                    <th class="m-tbl-th fw-light thView" scope="col">Last Name</th>
                    <th class="m-tbl-th fw-light thView" scope="col">First Name</th>
                    <th class="m-tbl-th fw-light thView" scope="col">M.I.</th>
                    <th class="m-tbl-th fw- d-none thView" scope="col">Birthdate</th>
                    <th class="m-tbl-th fw-light d-none thView" scope="col">Civil-Status</th>
                    <th class="m-tbl-th fw- d-none thView" scope="col">Sex</th>
                    <th class="m-tbl-th fw-light d-none sup-col thView" scope="col">Address</th>
                    <th class="m-tbl-th fw- d-none thView" scope="col">Contact Number</th>
                    <th class="m-tbl-th fw- d-none thView" scope="col">Email</th>
                    <th class="m-tbl-th fw-light thView" scope="col">Year Graduated</th>
                    <th class="m-tbl-th fw-light sup-col thView" scope="col">Program Graduated</th>
                    <th class="m-tbl-th fw-light thView" scope="col">Current Profession</th>
                    <th class="m-tbl-th fw- d-none thView" scope="col">Company Name</th>
                    <th class="m-tbl-th fw- d-none thView" scope="col">Present Employment Status</th>
                </tr>
            </thead>
            <tbody class="tbodyView row justify-content-end">
                <tr class="trView">
                    <td class="tdView pt-0"><p class="mb-0 text-start" style="margin-left: 14rem" id="tupv-view"></p></td>
                    <td class="tdView pt-0"><p class="mb-0 text-start" style="margin-left: 14rem" id="lname-view"></p></td>
                    <td class="tdView pt-0"><p class="mb-0 text-start" style="margin-left: 14rem" id="fname-view"></p></td>
                    <td class="tdView pt-0"><p class="mb-0 text-start" style="margin-left: 14rem" id="mi-view"></p></td>
                    <td class="tdView pt-0"><p class="mb-0 text-start" style="margin-left: 14rem" id="bdate-view"></p></td>
                    <td class="tdView pt-0"><p class="mb-0 text-start" style="margin-left: 14rem" id="cs-view"></p></td>
                    <td class="tdView pt-0"><p class="mb-0 text-start" style="margin-left: 14rem" id="sex-view"></p></td>
                    <td class="tdView pt-0"><p class="mb-0 text-start" style="margin-left: 14rem" id="add-view"></p></td>
                    <td class="tdView pt-0"><p class="mb-0 text-start" style="margin-left: 14rem" id="cnum-view"></p></td>
                    <td class="tdView pt-0"><p class="mb-0 text-start" style="margin-left: 14rem" id="email-view"></p></td>
                    <td class="tdView pt-0"><p class="mb-0 text-start" style="margin-left: 14rem" id="ygrad-view"></p></td>
                    <td class="tdView pt-0"><p class="mb-0 text-start" style="margin-left: 14rem" id="pgrad-view"></p></td>
                    <td class="tdView pt-0"><p class="mb-0 text-start" style="margin-left: 14rem" id="cprof-view"></p></td>
                    <td class="tdView pt-0"><p class="mb-0 text-start" style="margin-left: 14rem" id="cname-view"></p></td>
                    <td class="tdView pt-0"><p class="mb-0 text-start" style="margin-left: 14rem" id="pes-view"></p></td>
                </tr>

            </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

