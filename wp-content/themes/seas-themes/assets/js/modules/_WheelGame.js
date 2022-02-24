/* Libraries */
import { pageListener } from "./utils";
import { TweenMax } from "gsap";
import md5 from "crypto-js/md5";

/* GAME REFERENCE CONSTANT */
const GAME_DEFAULT_STATUS = {
  partNo: 16,
  rotateCircleNo: 4,
  password: md5("123456").toString(),
};

const CONSULATION_PRIZE_INFO = {
  name: "Chuc may man lan sau",
  rate: 0,
  type: "text",
};

const WHEEL_MATH_INFO = {
  "wheel-4": {
    "prize-angle": {
      "prize-1": -45,
      "prize-2": 45,
      "prize-3": 135,
      "prize-4": 225,
    },
  },

  "wheel-8": {
    "prize-angle": {
      "prize-1": -67.5,
      "prize-2": -22.5,
      "prize-3": 22.5,
      "prize-4": 67.5,
      "prize-5": 112.5,
      "prize-6": 157.5,
      "prize-7": 202.5,
      "prize-8": 247.5,
    },
  },

  "wheel-12": {
    "prize-angle": {
      "prize-1": -75,
      "prize-2": -45,
      "prize-3": -15,
      "prize-4": 15,
      "prize-5": 45,
      "prize-6": 75,
      "prize-7": 105,
      "prize-8": 135,
      "prize-9": 165,
      "prize-10": 195,
      "prize-11": 225,
      "prize-12": 255,
    },
  },

  "wheel-16": {
    "prize-angle": {
      "prize-1": -78.75,
      "prize-2": -56.25,
      "prize-3": -33.75,
      "prize-4": -11.25,
      "prize-5": 11.25,
      "prize-6": 33.75,
      "prize-7": 56.25,
      "prize-8": 78.75,
      "prize-9": 101.25,
      "prize-10": 123.75,
      "prize-11": 146.25,
      "prize-12": 168.75,
      "prize-13": 191.25,
      "prize-14": 213.75,
      "prize-15": 236.25,
      "prize-16": 258.75,
    },
  },
};

const GAME_STATE_INIT = {
  /**
   * 1/ paused
   * 2/ is-rotating
   * 3/ pending-reset
   */
  status: "paused",
  /**
   * 1/ pre-play
   * 2/ played
   */
  state: "pre-play",
  staff: {
    name: "",
    id: "",
  },
  prize: null,
  user: null,
  isAllowedToPlay: false,
  isAdminLoggedIn: false,
};

// Regular Expression Value
const textReg = /^([^0-9]*)$/;
const digitReg = /^[0-9]*$/;
const emailReg =
  /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

/* Main Game Class Definition */
export default class Sections {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  constructor() {
    // Page Listener Object
    window.GameListener = new pageListener();

    // Setup
    this.Setup();
  }

  /* ===================================
   *  FEATURES
   * =================================== */
  Setup() {
    // Init Resources
    this.Init();

    // Game Setup
    this.GameSetup();

    // Modal Setup
    this.ModalSetup();
  }

  /* ===================================
   *  METHODS
   * =================================== */
  GameSetup() {
    /* GAME EVENTS */
    this.BindGameEvents();

    /* INIT */
    this.ResetGameData();

    /* UI INTERACTION ELEMENTS EVENTS */
    // Play Button
    this.gameElement.playBtn.on("click", () => {
      // Validated First
      if (this.gameData.isAllowedToPlay && this.gameData.user !== null) {
        if (this.gameState.status == "paused") {
          GameListener.emit("do-rotate");
        }
      } else {
        this.ShowModal(this.gameElement.inputModal);
      }
    });

    // Reset Button
    this.gameElement.resetBtn.on("click", () => {
      if (this.gameState.status == "pending-reset") {
        // Reset The Wheel
        GameListener.emit("reset-game");
      }
    });

    // Submit Info Button
    this.gameElement.submitInputBtn.on("click", () => {
      // Reset Validation Object
      this.formValidation = {
        clientName: false,
        clientEmail: false,
        clientPhone: false,
        password: false,
      };

      // username
      this.ValidateUserName();

      // email
      this.ValidateUserEmail();

      // phonenumber
      this.ValidatePhoneNumber();

      // password
      this.ValidatePassword();

      // Validate So Player Can Play After Filling The Form
      // Validate Callback
      let checkingArr = Object.values(this.formValidation);
      this.gameData.isAllowedToPlay = checkingArr.every(
        (checker) => checker === true
      );

      // console.log(this.formValidation, "is validated:", this.isValidated);

      // All input validated, keep going
      if (this.gameData.isAllowedToPlay) {
        // Update User Along With The Input
        this.gameState.user = {
          name: this.gameElement.inputs.clientName.val(),
          email: this.gameElement.inputs.clientEmail.val(),
          phone: this.gameElement.inputs.clientPhone.val(),
        };

        // Clear Old Input
        this.gameElement.inputs.clientName.val("");
        this.gameElement.inputs.clientEmail.val("");
        this.gameElement.inputs.clientPhone.val("");

        this.CloseModal(this.gameElement.inputModal);
      }
    });

    // Input Change And Validation
    // Client Name
    this.gameElement.inputs.clientName.on("change", (e) => {
      this.ValidateUserName();
    });

    // Client Email
    this.gameElement.inputs.clientEmail.on("change", (e) => {
      this.ValidateUserEmail();
    });

    // Client Phone Number
    this.gameElement.inputs.clientPhone.on("change", (e) => {
      this.ValidatePhoneNumber();
    });
  }

  // Init
  Init() {
    /* VARIABLES */
    this.gameElement = {
      playBtn: $("#spin-the-wheel-btn"),
      resetBtn: $("#reset-the-wheel-btn"),
      idleBtn: $("#idle-btn"),
      wheel: $("#wheel-illustration"),
      wheelPrize: $("#wheel-prize-list"),
      prizeModal: $("#prize-announcement-modal"),
      inputModal: $("#input-info-modal"),
      inputs: {
        clientName: $("#client-name-input"),
        clientEmail: $("#client-email-input"),
        clientPhone: $("#client-phone-number-input"),
        password: $("#play-password-input"),
        registeredDate: $("#registered-date-input"),
        secretKey: $("#secret-key-input"),
        prize: $("#prize-input"),
        staffInfo: $("#staff-info-input"),
      },
      inputErr: {
        clientName: $("#client-name-input-err"),
        clientEmail: $("#client-email-input-err"),
        clientPhone: $("#client-phone-number-input-err"),
        password: $("#password-input-err"),
      },
      submitInputBtn: $("#submit-user-info-btn"),
      prizeDetail: $("#prize-announcement-modal .prize-value-detail"),
    };

    // Debug Panel
    this.$DebugPanel = $(".debug-panel");

    // Modal
    this.$openModal_Btn = $(".open-modal");
    this.$closeModal_Btn = $(".close-modal");

    // Game Options
    /* TODO: Fetch Options From Server */
    this.gameOptions = {
      partNo: 16,
      rotateCircleNo: 4,
      time: 4,
      prize: [
        { name: "1 The mua hang 50k", rate: 1, type: "text" },
        { name: "2 The mua hang 20k", rate: 1, type: "text" },
        { name: "3 The mua hang 150k", rate: 1, type: "text" },
        { name: "4 The mua hang 50k", rate: 1, type: "text" },
        { name: "5 The mua hang 20k", rate: 1, type: "text" },
        { name: "6 The mua hang 150k", rate: 1, type: "text" },
        { name: "7 The mua hang 50k", rate: 1, type: "text" },
        { name: "8 The mua hang 20k", rate: 1, type: "text" },
        { name: "9 The mua hang 150k", rate: 1, type: "text" },
        { name: "10 The mua hang 50k", rate: 1, type: "text" },
        { name: "11 The mua hang 20k", rate: 1, type: "text" },
        { name: "12 The mua hang 150k", rate: 1, type: "text" },
        { name: "13 The mua hang 150k", rate: 1, type: "text" },
        { name: "14 The mua hang 50k", rate: 1, type: "text" },
        { name: "15 The mua hang 20k", rate: 1, type: "text" },
        { name: "16 The mua hang 150k", rate: 20, type: "text" },
      ],
    };

    // Game State
    /* TODO: Fetch Staff Data From Server */
    this.gameStateStarter = {
      staff: {
        name: "Nhat Tran",
        id: "1938",
        token: "153945A1B7",
      },
      user: {
        name: "",
        email: "",
        phone: "",
        life: 0,
      },
    };
  }

  // Game Events
  BindGameEvents() {
    // User Logged In
    GameListener.on("user-logged-in", () => {
      console.log("user is logged in");
      GameListener.emit("update-debug");
    });

    // Reset Game to Preplay state
    GameListener.on("reset-game", (mode) => {
      this.ResetWheel();
      GameListener.emit("update-debug");
    });

    // Do Rotation
    GameListener.on("do-rotate", () => {
      // Update Game Status
      this.gameState.status = "is-rotating";

      // Update Element
      this.gameElement.playBtn.removeClass("active");
      this.gameElement.idleBtn.addClass("active");

      // Random Result
      let result = this.CalculateResult();
      if (this.gameData.prize[result - 1] !== undefined) {
        this.gameState.prize = { ...this.gameData.prize[result - 1] };
      }

      // Calculate destiny angle degree
      let resultAngle =
        this.gameData.rotateCircleNo * 360 +
        WHEEL_MATH_INFO[`wheel-${this.gameData.partNo}`]["prize-angle"][
          `prize-${result}`
        ];

      // Update Debug Panel
      GameListener.emit("update-debug");

      // Wheel Animation
      TweenMax.to(this.gameElement.wheel, 5, {
        rotate: resultAngle,
        onComplete: () => {
          GameListener.emit("show-prize");
          GameListener.emit("update-debug");
        },
      });
    });

    // Show Reward
    GameListener.on("show-prize", () => {
      // Show Prize Modal
      this.ShowPrizeModal();

      // Save Prize Information
      GameListener.emit("save-prize");

      // Update debug panel
      GameListener.emit("update-debug");
    });

    // Save Prize To Sheet
    GameListener.on("save-prize", () => {
      // TODO: Save Game Data
      console.log(this.gameState);

      // Update status
      this.gameState.status = "pending-reset";

      // Update Elements
      this.gameElement.idleBtn.removeClass("active");
      this.gameElement.resetBtn.addClass("active");

      /* TODO: Submit the result form */
      GameListener.emit("update-debug");
    });

    GameListener.on("update-debug", () => {
      this.$DebugPanel.html(
        `<code>
          <b>gameState</b>: ${JSON.stringify(this.gameState)}<br><br>
          <b>gameData</b>: ${JSON.stringify(this.gameData)}
        </code>`
      );
    });
  }

  // Game Data Reset
  ResetGameData() {
    // Merge game data with DEFAULT SETTINGS
    this.gameData = { ...GAME_DEFAULT_STATUS, ...this.gameOptions };
    this.gameState = { ...GAME_STATE_INIT, ...this.gameStateStarter };

    // Reset Form Validation Object
    this.formValidation = {
      clientName: false,
      clientEmail: false,
      clientPhone: false,
      password: false,
    };

    // Draw the wheel based on data
    this.DrawWheel();

    GameListener.emit("update-debug");
  }

  // Reset Wheel
  ResetWheel(callback = null) {
    TweenMax.set(this.gameElement.wheel, {
      rotate: 0,
    });

    // Update Element
    this.gameElement.playBtn.addClass("active");
    this.gameElement.resetBtn.removeClass("active");
    this.gameElement.idleBtn.removeClass("active");

    // Reset The Data
    this.ResetGameData();
  }

  // Draw Wheel
  DrawWheel() {
    // Matching Wheel Type (4,8,12,16)
    let wheelType = this.gameData.partNo;

    // Remove Old Class (If have any)
    this.gameElement.wheel.removeClass("wheel-4 wheel-8 wheel-12 wheel-16");

    // Add Proper Class
    this.gameElement.wheel.addClass(`wheel-${wheelType}`);

    // Put the prize name into the wheel
    let prizeList = [...this.gameOptions.prize];

    // Draw Prize List If Only The Length Matching The number of parts
    if (prizeList.length == this.gameData.partNo) {
      // Good to go, draw prize
      this.DrawPrize(prizeList);
    } else {
      // Too many prize info, too little part, trim down the prize
      if (prizeList.length > this.gameData.partNo) {
        prizeList.splice(
          this.gameData.partNo - 1,
          prizeList.length - this.gameData.partNo
        );

        // This will affect the prize rate, so need update
        this.gameOptions.prize = [...prizeList];

        // Draw new trimmed prize list
        this.DrawPrize(prizeList);
      } else {
        // Too Manny Slot but too little prize info - Add more consulation Prize with 0% hit
        while (prizeList.length < this.gameData.partNo) {
          prizeList.push(CONSULATION_PRIZE_INFO);

          // Draw prizeList with extra consulation prize
          this.DrawPrize(prizeList);
        }
      }
    }
  }

  // Draw Prize Info
  DrawPrize(prizeList) {
    // Empty the wheel prize list first
    this.gameElement.wheelPrize.html("");

    // Append Prize Item
    prizeList.forEach((item) => {
      switch (item.type) {
        case "text":
          this.gameElement.wheelPrize.append(
            `<li class="prize-item"><p>${item.name}</p></li>`
          );
          break;
      }
    });
  }

  // Update And Show Reward Detail
  ShowPrizeModal() {
    if (this.gameState.prize == null) {
      this.gameElement.prizeDetail.html("Chuc may man lan sau");
      this.ShowModal(this.gameElement.prizeModal);
    } else {
      this.gameElement.prizeDetail.html(this.gameState.prize.name);
      this.ShowModal(this.gameElement.prizeModal);
    }
  }

  /* === UTILS === */
  // Calculate random result with percentage
  CalculateResult() {
    let prizeList = this.gameData.prize;
    let randomNumber = Math.random();
    let totalRatePoint = prizeList.reduce((acc, item) => acc + item.rate, 0);

    let range = [0];
    prizeList.forEach((item, index) => {
      range.push(range[index] + item.rate / totalRatePoint);
    });

    let resultIndex = 1;
    for (let i = 1; i < range.length; i++) {
      if (randomNumber <= range[i]) {
        break;
      } else {
        resultIndex += 1;
      }
    }

    console.log(resultIndex);

    return resultIndex;
  }

  // Modal Setup
  ModalSetup() {
    // Open Modal
    this.$openModal_Btn.on("click", (e) => {
      // Get correct html target element
      let $target = $(e.target);
      if ($target.parents(".open-modal").length > 0) {
        $target = $target.parents(".open-modal");
      }

      // Get ID of the modal
      let targetModal = $target.data("target");
      if (targetModal) {
        ShowModal($(`.modal#${targetModal}`));
      }
    });

    // Close Modal
    this.$closeModal_Btn.on("click", (e) => {
      // Get correct html target element
      let $target = $(e.target);
      if ($target.parents(".close-modal").length > 0) {
        $target = $target.parents(".close-modal");
      }

      // Get ID of the modal
      let targetModal = $target.data("target");
      if (targetModal) {
        this.CloseModal($(`.modal#${targetModal}`));
      }
    });
  }

  // Show Modal
  ShowModal($target) {
    $("body, html").addClass("show-modal");
    $target.addClass("active");
  }

  // Show Modal
  CloseModal($target) {
    $("body, html").removeClass("show-modal");
    $target.removeClass("active");
  }

  ValidateUserName() {
    if (
      textReg.test(this.gameElement.inputs.clientName.val()) &&
      this.gameElement.inputs.clientName.val().length >= 2
    ) {
      this.gameElement.inputs.clientName.removeClass("err");
      this.gameElement.inputErr.clientName.removeClass("err");
      this.formValidation.clientName = true;
    } else {
      this.gameElement.inputs.clientName.addClass("err");
      this.gameElement.inputErr.clientName.addClass("err");
      this.formValidation.clientName = false;
    }
  }

  ValidateUserEmail() {
    if (
      emailReg.test(
        String(this.gameElement.inputs.clientEmail.val().toLowerCase())
      )
    ) {
      this.gameElement.inputs.clientEmail.removeClass("err");
      this.gameElement.inputErr.clientEmail.removeClass("err");
      this.formValidation.clientEmail = true;
    } else {
      this.gameElement.inputs.clientEmail.addClass("err");
      this.gameElement.inputErr.clientEmail.addClass("err");
      this.formValidation.clientEmail = false;
    }
  }

  ValidatePhoneNumber() {
    if (
      digitReg.test(this.gameElement.inputs.clientPhone.val()) &&
      this.gameElement.inputs.clientPhone.val().length >= 9 &&
      this.gameElement.inputs.clientPhone.val().length <= 10
    ) {
      this.gameElement.inputs.clientPhone.removeClass("err");
      this.gameElement.inputErr.clientPhone.removeClass("err");
      this.formValidation.clientPhone = true;
    } else {
      this.gameElement.inputs.clientPhone.addClass("err");
      this.gameElement.inputErr.clientPhone.addClass("err");
      this.formValidation.clientPhone = false;
    }
  }

  ValidatePassword() {
    console.log(
      this.gameData.password,
      md5(this.gameElement.inputs.password.val()).toString()
    );
    if (
      md5(this.gameElement.inputs.password.val().toString()) ==
      this.gameData.password
    ) {
      this.gameElement.inputs.password.removeClass("err");
      this.gameElement.inputErr.password.removeClass("err");
      this.formValidation.password = true;
    } else {
      this.gameElement.inputs.password.addClass("err");
      this.gameElement.inputErr.password.addClass("err");
      this.formValidation.password = false;
    }
  }
}
