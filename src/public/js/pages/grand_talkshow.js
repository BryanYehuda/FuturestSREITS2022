const vm = new Vue({
	el: "#section",
	data: {
		timeline: [
      {
				date: "3-14 January 2022",
				description:
					"Open registration",
			},
      {
				date: "15 January 2022 (09.00-11.30)",
				description:
					"D-Day",
			}    
		],
    speakers: [
      {
        title: "Government POV",
        name: "Dadan Kusdiana",
        job: "Director General of New, Renewable Energy and Energy Conservation"
      },
      {
        title: "Business POV",
        name: "Devina S Raditya",
        job: "Director - Environment & Sustainability, GSC EAJ & International - PT. Schneider Indonesia"
      },
      {
        title: "Environmental Activist POV",
        name: "Natasha Keniraras",
        job: "Ocean Engineering Alumni, Awardee of Best Paper in ISOCEEN 2020 titled 'Hydrodynamics Performance Analysis of Vertical Axis Water Turbine Gorlov Type Using Computational Fluid Dynamics Approach'"
      }
    ],
    pertanyaan: [
			{
				id: "headingOne",
				question: "When will the event be held?",
				dataBsTarget: "#collapseOne",
				ariaControls: "collapseOne",
				ariaExpanded: "true",
				collapsed: "",
				show: "show",
				answer:
					"Saturday, January 15, 2022  @9:00am-11:30am",
			},
			{
				id: "headingTwo",
				question: "What platforms will the event be held on?",
				dataBsTarget: "#collapseTwo",
				ariaControls: "collapseTwo",
				ariaExpanded: "false",
				collapsed: "collapsed",
				show: "",
				answer:
					"Zoom; for limited participants, and those who can't enter zoom can go through YouTube later, the link will be attached in the broadcast email",
			},
			{
				id: "headingThree",
				question: "What benefits will you get?",
				dataBsTarget: "#collapseThree",
				ariaControls: "collapseThree",
				ariaExpanded: "false",
				collapsed: "collapsed",
				show: "",
				answer:
					"New knowledge/insights regarding “The Urgency of Climate Change Mitigation”, can discuss directly with the experts, and participants who actively ask questions will get interesting merchandise from Futurest 2022",
			},
		],
	},
});
